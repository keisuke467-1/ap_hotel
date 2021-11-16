<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomgroup extends Model
{
    protected $fillable = ['name','max_capacity'];
}
