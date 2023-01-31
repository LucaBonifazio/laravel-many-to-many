<?php

namespace App;

use App\Traits\Slugger;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Slugger;

    public $timestamp = false;

    public function posts() {
        return $this->belongsToMany('App\Post');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
