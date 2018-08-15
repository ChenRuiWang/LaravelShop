<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\User;

class UserAddress extends Model
{
    protected $fillable = [
    	'province', // 省
    	'city', // 市
    	'district', // 区
    	'address', // 具体地址
    	'zip',// 邮编
    	'contact_name', // 联系人姓名
    	'contact_phone', // 联系人电话
    	'last_used_at',// 最后一次使用时间
    ];

    protected $dates = ['last_used_at'];

    // 关联user模型 一个user可以有多个收货地址
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getFullAddressAttribute()
    {
    	return "{$this->protected}{$this->city}{$this->district}{$this->address}";
    }
}
