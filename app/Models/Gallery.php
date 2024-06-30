<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * ATTRIBUTES
 * @property string|null $photo
 */
class Gallery extends Model
{
    protected $fillable = [
        'photo',
    ];
}
