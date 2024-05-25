<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * ATTRIBUTES
 * @property string|null $photo
 * @property string $caption
 */
class PhotoGallery extends Model
{
    protected $fillable = [
        'photo',
        'caption',
    ];
}
