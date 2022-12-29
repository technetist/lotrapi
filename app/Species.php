<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    protected $appends = array('url');

    public function characters()
    {
        return $this->hasMany('App\Character', 'id')->select('id', 'name');
    }

    public function getUrlAttribute()
    {
        $id = $this->id;
        return env('APP_URL') . '/api/v1/species/' . $id;
    }
}
