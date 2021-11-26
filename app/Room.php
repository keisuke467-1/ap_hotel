<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Roomgroup;

class room extends Model
{
    protected $fillable = ['roomgroups_id','room_numbers'];

    protected $primaryKey = 'roomgroups_id';


    public function roomgroup()
    {
        return $this->belongsTo('App\Roomgroup','roomgroups_id');
    }

    public function reserves()
    {
        return $this->belongsToMany('App\Reserve','reserve_room','room_id','reserve_id');
    }

    //スコープで人数に合う部屋をroomgroupから持ってくる
    //pluckの部分、何が欲しいか再考
    public function scopeSearchCapacity($query, $capacity)
    {
        $room_group = Roomgroup::where('max_capacity', '>=' ,$capacity)->pluck('id');
        return $query->whereIn('roomgroups_id',$room_group);
    }

    //
    public function scopeSearchDays($query, $days)
    {
        $room_group = Reserve::where('', '>=' ,$days)->pluck('id');
        return $query->whereIn('roomgroups_id',$room_group);
    }
}
