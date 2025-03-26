<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function items(){
        return $this->hasMany(Item::class);
    }

    public function contents(){
        return $this->hasMany(Content::class);
    }

    public function page(){
        return $this->belongsToMany(Page::class, 'sections', 'id', 'page_id');
    }
}
