<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersxController extends Controller
{
    // Kullanıcıların tümünü listeleme
    public function index()
    {
        $usersx = User::all();
        return view("admin.usersx.index", compact("usersx"));
    }

    // Yeni kullanıcı oluşturma formu
    public function create()
    {
        return view("admin.usersx.create");
    }

    // Yeni kullanıcı kaydetme işlemi
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('usersx.index')->with('success', 'Kullanıcı başarıyla eklendi.');
    }

    // Kullanıcı düzenleme formu
    public function edit($id)
    {
        $usersx = User::findOrFail($id);
        return view("admin.usersx.update", compact("usersx"));
    }

    // Kullanıcı güncelleme işlemi
    public function update(Request $request, $id)
    {


        $usersx = User::findOrFail($id);
        $usersx->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $usersx->password,
        ]);

        return redirect()->route('usersx.index')->with('success', 'Kullanıcı başarıyla güncellendi.');
    }

    // Kullanıcı silme işlemi
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('usersx.index')->with('success', 'Kullanıcı başarıyla silindi.');
    }
}
