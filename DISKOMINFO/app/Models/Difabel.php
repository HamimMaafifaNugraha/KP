<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Difabel extends Model
{
    use HasFactory;
    protected $table = 'difabel';
    public $timestamps = true;

    protected $fillable = [
        'barang',
        'pemilik',
        'tanggal',
        'created_at'
    ];
}
