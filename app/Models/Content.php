<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * ATTRIBUTES
 * @property string $title
 * @property string $sub_title
 * @property string $section_one
 * @property string $section_two
 * @property string|null $section_three
 * @property string|null $image_one
 * @property string $image_one_source
 * @property string $image_two
 * @property string $image_two_source
 * @property string|null $image_three
 * @property string|null $image_three_source
 */
class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sub_title',
        'section_one',
        'section_two',
        'section_three',
        'image_one',
        'image_one_source',
        'image_two',
        'image_two_source',
        'image_three',
        'image_three_source',
    ];
}
