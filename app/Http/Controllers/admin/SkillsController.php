<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillsRequest;
use App\Models\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $skills = $user->skills;

        return view("admin.skills.index", compact("skills"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.skills.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillsRequest $request)
    {
        $user = Auth::user();
        $skill = $user->skills()->create($request->all());


        return redirect()->route("skills.index");
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
        $skills = Skills::find($id);
        return view("admin.skills.update", compact("skills"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillsRequest $request, string $id)
    {
        $skills = Skills::find($id);
        $skills->update($request->all());
        return redirect()->route("skills.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skills = Skills::find($id);
        $skills->delete();
        return redirect()->route("skills.index");
    }
}
