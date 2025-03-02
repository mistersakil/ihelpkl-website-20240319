<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'countries';

    protected $fillable = [
        'iso2',       // 2-letter ISO code
        'name',       // Name of the country
        'status',     // Status (active or inactive)
        'phone_code', // Phone code (e.g., +1)
        'iso3',       // 3-letter ISO code
        'region',     // Region (e.g., Americas)
        'subregion',  // Subregion (e.g., Northern America)
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'status' => 'boolean', // Convert status to boolean for easier handling
    ];
}
