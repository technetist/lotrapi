<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $hidden = ['created_at', 'updated_at', 'pivot'];
}
