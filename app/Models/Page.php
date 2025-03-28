<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // public function sections(){
    //     return $this->hasMany(Section::class);
    // }

    public function sections(){
        return $this->belongsToMany(Section::class, 'page_sections', 'page_id', 'section_id');
    }
}
