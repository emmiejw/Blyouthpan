<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * ATTRIBUTES
 * @property string $name
 * @property string $role
 * @property string $about_me
 * @property string $email
 * @property string|null $mobile
 * @property string|null $photo
 */

class Manager extends Model
{
    protected $fillable = [
        'name',
        'role',
        'about_me',
        'email',
        'mobile',
        'photo',
    ];
}
