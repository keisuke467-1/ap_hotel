<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reserve;

class Hoteluser extends Model
{
    protected $fillable = ['name','address','tel'];

    public function reserves()
    {
        return $this->hasMany('App\Reserve');
    }
}
