<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Thread extends Model
{
    protected $fillable = ['title', 'body'];

    public function path()
    {
        return sprintf('/threads/%s', $this->id);
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
