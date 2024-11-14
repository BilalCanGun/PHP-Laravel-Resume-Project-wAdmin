<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RcontactController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $rcontact = $user->rcontact;
        return view("auth.register.contact", compact("rcontact"));
    }

    public function store(Request $request)
    {
        $rcontact = $request->all();
        $rcontact['user_id'] = Auth::id();



        Contact::create($rcontact);



        return redirect()->route('web');
    }
}
