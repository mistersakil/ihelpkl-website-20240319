<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'slider_title',
        'slider_body',
        'slider_link',
        'slider_link_text',
        'slider_image',
        'order',
        'is_active'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['slider_image_link'];

    /**
     * Determine is_active_text
     */
    protected function sliderImageLink(): Attribute
    {
        return new Attribute(
            get: function () {
                $imagePath = 'uploads/sliders/'. $this->slider_image;
                $imageUrl = Storage::url($imagePath);
                return $imageUrl;
            },
        );
    }
}
