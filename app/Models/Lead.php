<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'country_id',
        'mobile_number',
        'product_id',
        'message',
    ];

    // public function country()
    // {
    //     return $this->belongsTo(Country::class);
    // }

    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }
}
