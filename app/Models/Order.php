<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'amount',
        'is_paid',
        'dp_receipt',
        'payment_receipt'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
        // return $this->belongsTo('App\Service');
    }

    public function jamaah()
    {
        return $this->hasMany(Jamaah::class);
    }

}
