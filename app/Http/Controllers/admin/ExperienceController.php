<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $exp = $user->experience;


        return view("admin.experience.index", compact("exp"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view("admin.experience.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceRequest $request)
    {
        $user = Auth::user();
        $user->experience()->create($request->all());

        return redirect()->route('experience.index');
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
        $exp = Experience::findOrFail($id);
        return view('admin.experience.update', compact('exp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienceRequest $request, string $id)
    {
        $exp = Experience::where('user_id', Auth::id())->findOrFail($id);
        $exp->update($request->all());
        return redirect()->route('experience.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exp = Experience::findOrFail($id);
        $exp->delete();
        return redirect()->route('experience.index');
    }
}
