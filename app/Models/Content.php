<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function section(){
        return $this->belongsTo(Section::class);
    }
}
