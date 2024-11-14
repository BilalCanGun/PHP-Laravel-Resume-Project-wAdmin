<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $about = $user->about;

        return view("admin.about.index", compact("about"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.about.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutRequest $request)
    {


        $data = $request->all();
        $data['user_id'] = Auth::id();

        if ($request->hasFile('profile_image')) {

            $fileName = $request->file('profile_image')->getClientOriginalName();
            $request->file('profile_image')->storeAs('images', $fileName, 'public');

            $data['profile_image'] = 'images/' . $fileName;
        }


        About::create($data);

        return redirect()->route('about.index');
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
        $about = About::where('user_id', Auth::id())->findOrFail($id);
        return view('admin.about.update', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(About $about, AboutRequest $request)
    {
        if ($about->user_id !== Auth::id()) {
            return redirect()->route('about.index')->withErrors('Unauthorized access');
        }


        $data = $request->all();

        if ($request->File('profile_image')) {


            if ($about->profile_image) {
                Storage::disk('public')->delete($about->profile_image);
            }


            $fileName = $request->file('profile_image')->getClientOriginalName();
            $request->file('profile_image')->storeAs('images', $fileName, 'public');

            $data['profile_image'] = 'images/' . $fileName;
        }


        $about->update($data);
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::where('user_id', Auth::id())->findOrFail($id);
        $about->delete();
        return redirect()->route('about.index');
    }
}
