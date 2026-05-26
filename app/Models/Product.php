<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Inisialisasi table product
    protected $table = 'tb_product';
    // Inisialisasi primary key di dalam table
    protected $primaryKey = 'id_product';
    // Inisialisai data yang dapat diisi
    // protected $fillable = ['name_product', 'stock'];
    // Inisialisai data yang tidak boleh isi manual
    protected $guarded = ['id_product'];

}
