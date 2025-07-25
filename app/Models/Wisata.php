<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'judul',
        'deskripsi',
    ];

    public function komentars()
    {
        return $this->hasMany(Komentar::class);
    }
}
