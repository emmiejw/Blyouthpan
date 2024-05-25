<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * ATTRIBUTES
 * @property string $opponent_team
 * @property string $comments
 * @property int $opponent_score
 * @property int $team_score
 */
class Game extends Model
{
    protected $fillable = [
        'opponent_team',
        'opponent_score',
        'team_score',
        'comments'
    ];
    public function fixture(): BelongsTo
    {
        return $this->belongsTo(Fixture::class, 'fixture_id');
    }
}
