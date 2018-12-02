<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'company',
        'email',
        'phone',
        'id_num',
        'address',
        'img',
        'seller_id',
        'subscribe_date',
        'subscribe_end',
        'activities',
        'sort',
        'package'
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
