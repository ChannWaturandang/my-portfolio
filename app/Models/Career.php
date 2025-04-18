<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',             // Nama posisi pekerjaan
        'typeofwork',           // Jenis pekerjaan (Fulltime, Part-time, dsb)
        'current_job',          // Pekerjaan yang sedang dijalani
        'start_date',           // Tanggal mulai kerja
        'end_date',             // Tanggal berakhir kerja
        'location',             // Lokasi pekerjaan (URL)
        'location_type',        // Tipe lokasi pekerjaan (On site, Combined, dsb)
        'employment_type',      // Jenis pekerjaan (full-time, part-time, internship)
        'description',          // Deskripsi pekerjaan
        'posted_at',            // Waktu posting pekerjaan
    ];
}
