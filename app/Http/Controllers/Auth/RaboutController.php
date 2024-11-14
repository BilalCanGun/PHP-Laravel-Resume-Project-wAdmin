<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RaboutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $rabout = $user->rabout;
        return view("auth.register.about", compact('rabout'));
    }

    public function store(Request $request)
    {
        $about = $request->all();
        $about['user_id'] = Auth::id();


        if ($request->hasFile('profile_image')) {

            $fileName = $request->file('profile_image')->getClientOriginalName();
            $request->file('profile_image')->storeAs('images', $fileName, 'public');

            $about['profile_image'] = 'images/' . $fileName;
        }

        About::create($about);



        return redirect()->route('reducation');
    }
}
