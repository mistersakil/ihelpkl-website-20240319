<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoRequest extends Model
{
    use HasFactory;
    protected $table = 'leads';
    protected $fillable = ['name', 'email', 'country_id', 'mobile_number', 'product_id', 'message'];
}
