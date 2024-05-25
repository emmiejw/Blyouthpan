<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * ATTRIBUTES
 * @property string $name
 * @property string $location
 * @property Carbon date_time

 */

class Fixture extends Model
{
    protected $fillable = [
        'name',
        'location',
        'date_time',
    ];

    public function games(): HasMany
    {
        return $this->hasMany( Game::class);
    }

}
