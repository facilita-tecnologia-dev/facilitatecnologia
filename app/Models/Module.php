<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'plan_modules', 'module_id', 'plan_id');
    }
}
