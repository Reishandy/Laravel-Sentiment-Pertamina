<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class History extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'input',
        'prediction',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
