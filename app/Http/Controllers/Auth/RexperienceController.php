<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RexperienceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $rexperience = $user->rexperience;
        return view("auth.register.experience", compact("rexperience"));
    }

    public function store(Request $request)
    {
        $rexperience = $request->all();
        $rexperience['user_id'] = Auth::id();



        Experience::create($rexperience);



        return redirect()->route('rskills');
    }
}
