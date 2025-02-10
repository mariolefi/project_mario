<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use HasFactory;

    // definisikan nama table
    protected $table = 'kategori';

    protected $fillable = [
        'nama',
        'deskripsi'
    ];

    public function buku()
    {
        return $this->hasMany(buku::class);
    }
}
