<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReducationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $reducation = $user->reducation;
        return view("auth.register.education", compact("reducation"));
    }

    public function store(Request $request)
    {
        $reducation = $request->all();
        $reducation['user_id'] = Auth::id();



        Education::create($reducation);



        return redirect()->route('rexperience');
    }
}
