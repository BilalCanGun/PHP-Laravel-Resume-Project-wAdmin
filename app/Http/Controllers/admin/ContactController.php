<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $contact = $user->contact;

        return view("admin.contact.index", compact("contact"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.contact.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {

        $user = Auth::user();
        $user->contact()->create($request->all());


        return redirect()->route("contact.index");
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
        $contact = Contact::where('user_id', Auth::id())->findOrFail($id);
        return view("admin.contact.update", compact("contact"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, string $id)
    {
        $contact = Contact::where('user_id', Auth::id())->findOrFail($id);
        $contact->update($request->all());
        return redirect()->route("contact.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::where('user_id', Auth::id())->findOrFail($id);
        $contact->delete();
        return redirect()->route("contact.index");
    }
}
