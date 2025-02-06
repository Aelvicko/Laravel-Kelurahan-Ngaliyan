<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel contacts
        $contacts = Contact::all();

        // Kirim data ke tampilan
        return view('page_admin.messages.messages', compact('contacts'));
    }

    public function destroy($id)
{
    $contact = Contact::findOrFail($id);  // Mencari data berdasarkan ID
    $contact->delete();  // Menghapus data dari database

    return redirect()->route('contacts.index')->with('success', 'Data berhasil dihapus');
}

public function search(Request $request)
{
    $search = $request->input('search');

    $contacts = Contact::where('nama', 'LIKE', "%{$search}%")
                        ->orWhere('email', 'LIKE', "%{$search}%")
                        ->orWhere('pesan', 'LIKE', "%{$search}%")
                        ->orWhere('created_at', 'LIKE', "%{$search}%")
                        ->get();

    return view('page_admin.messages.messages', compact('contacts'));
}

}
