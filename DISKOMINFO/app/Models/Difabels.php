<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Difabels extends Model
{
    use HasFactory;
    protected $table = 'difabels';
    public $timestamps = true;

    // protected $fillable = [
    //     'id'
    //     'barang',
    //     'pemilik',
    //     'tanggal',
    //     'created_at',
    //     'update_at'
    // ];
}
