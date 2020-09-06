<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = ['title', 'body'];

    public function path() {
        return sprintf('/threads/%s', $this->id);
    }
}
