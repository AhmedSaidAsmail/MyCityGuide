<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'id_num',
        'address',
        'img',
        'seller_id',
        'subscribe_date',
        'subscribe_end',
        'qr_code',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
