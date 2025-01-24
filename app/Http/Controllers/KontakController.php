<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class KontakController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Simpan data ke tabel contacts
        Contact::create([
            'email' => $validated['email'],
            'nama' => $validated['name'], // Kolom 'nama' di database
            'pesan' => $validated['message'], // Kolom 'pesan' di database
        ]);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with(key: 'success', value: 'Pesan berhasil dikirim!');
    }
}
