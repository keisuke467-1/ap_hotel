<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = ['hoteluser_id','Number_of_people','check_in','check_out'];

    public function hoteluser()
    {
        return $this->belongsTo('App\Hoteluser');
    }

    public function rooms()
    {
        return $this->belongsToMany('App\Room','reserve_room','reserve_id','room_id')->withPivot('room_numbers');
    }

    //RoomControllerのindex()で定義されていて
    //SearchCheckinスコープに、入力されたチェックイン情報を引数で受け取ってる。
    //$query（このモデル（Reserve）？）で
    //'check_in'カラムが$check_in引数より小さい、かつ
    //'check_out'カラムが$check_in引数より大きい
    //↑これにあてはまったやつを返す
    public function scopeSearchCheckin($query, $check_in)
    {
        return $query->where('check_in', '<=', $check_in)->
        where('check_out', '>=', $check_in);
    }
    public function scopeSearchCheckout($query, $check_out)
    {
        return $query->where('check_in', '<=', $check_out)->
        where('check_out', '>=', $check_out);
    }

    public function scopeSearchCheckReserve($query,$check_in,$check_out)
    {
        return $query->where('check_in','<=',$check_in)->where('check_out','>=',$check_out);
    }
}
