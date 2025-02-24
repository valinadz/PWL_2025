<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan profil pengguna berdasarkan ID dan Nama
    public function profile($id, $name)
    {
        return view('user.profile', compact('id', 'name'));
    }
}
?>