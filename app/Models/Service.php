<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'short_description',
        'image',
        'stock',
        'kategori',
        'durasi',
        'penerbangan',
        'maskapai',
        'termasuk',
        'tidak_termasuk'
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }


}
