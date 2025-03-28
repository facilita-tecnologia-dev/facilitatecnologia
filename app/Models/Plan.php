<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function modules(){
        return $this->belongsToMany(Module::class, 'plan_modules', 'plan_id', 'module_id');
    }
}
