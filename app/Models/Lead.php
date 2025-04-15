<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name',
        'email',
        'mobile_number',
        'message'
    ];

    /**
     * Get and set email attribute value
     */

    protected function email(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => strtolower($value),
        );
    }

    /**
     * Get lead country details
     *
     * @return void
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }
}
