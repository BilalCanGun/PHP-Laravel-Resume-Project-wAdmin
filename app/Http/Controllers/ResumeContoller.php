<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Auth kütüphanesini ekleyin

class ResumeContoller extends Controller
{
    public function index()
    {
        $userId = Auth::id(); // Oturum açmış kullanıcının ID'sini alın
        $about = About::where('user_id', $userId)->first(); // Kullanıcıya ait 'about' bilgilerini alın
        $experiences = Experience::where('user_id', $userId)->get(); // Kullanıcıya ait deneyimleri alın
        $educations = Education::where('user_id', $userId)->get(); // Kullanıcıya ait eğitim bilgilerini alın
        $skills = Skills::where('user_id', $userId)->get(); // Kullanıcıya ait becerileri alın
        $contacts = Contact::where('user_id', $userId)->get(); // Kullanıcıya ait iletişim bilgilerini alın
        return view("index", compact('about', 'experiences', 'educations', 'skills', 'contacts'));
    }
}
