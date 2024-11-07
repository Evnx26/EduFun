<?php

namespace App\Models;

use App\Models\writer;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = [
        'id',
    ];

    public function writer() {
        return $this->belongsTo(Writer::class, 'writers_id');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }    
}
