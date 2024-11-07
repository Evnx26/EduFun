<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class writer extends Model
{
    protected $guarded = [
        'id',
    ];

    public function posts(){
        return $this->hasMany(post::class);
    }
}
