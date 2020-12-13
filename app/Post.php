<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];//telling the model not to worry about what the controller is getting

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
