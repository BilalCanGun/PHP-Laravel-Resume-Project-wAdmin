<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationRequest;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $edu = $user->education;
        return view("admin.education.index", compact("edu"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view("admin.education.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationRequest $request)
    {
        $user = Auth::user();
        $user->education()->create($request->all());
        return redirect()->route("education.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edu = Education::where('user_id', Auth::id())->findOrFail($id);
        return view("admin.education.update", compact("edu"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EducationRequest $request, string $id)
    {
        $edu = Education::where('user_id', Auth::id())->findOrFail($id);


        $edu->update($request->all());
        return redirect()->route("education.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $edu = Education::where('user_id', Auth::id())->findOrFail($id);
        $edu->delete();
        return redirect()->route("education.index");
    }
}
