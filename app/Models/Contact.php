<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

     /**
     * Nama tabel yang terkait dengan model ini.
     * Secara default, Laravel akan menggunakan nama tabel plural dari nama model.
     */
    protected $table = 'contacts';

    /**
     * Kolom-kolom yang dapat diisi (mass assignable).
     */
    protected $fillable = [
        'email',
        'nama',
        'pesan',
    ];
}
