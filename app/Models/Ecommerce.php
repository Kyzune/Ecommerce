<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecommerce extends Model
{
    use HasFactory;
    public $fillable=['kode_barang', 'nama_barang', 'harga'];
}