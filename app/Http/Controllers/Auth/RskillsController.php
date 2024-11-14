<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RskillsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $rskills = $user->rskills;
        return view("auth.register.skills", compact("rskills"));
    }

    public function store(Request $request)
    {
        $rskills = $request->all();
        $rskills['user_id'] = Auth::id();



        Skills::create($rskills);



        return redirect()->route('rcontact');
    }
}
