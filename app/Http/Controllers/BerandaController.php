<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Article;


class BerandaController extends Controller
{
    public function index()
    {
        $articles = Article::all(); 

        // Jika ada data yang perlu diambil, bisa ditambahkan di sini
        return view('page_web.beranda.beranda', compact('articles'));
    }
    
    
}
