<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $appends = [
        'gender_name',
    ];

    const GENDER_MALE = 1; // 男
    const GENDER_FEMALE = 2; // 女

    const GENDER_OPTIONS = [
        [
            'name' => '男',
            'value' => self::GENDER_MALE,
        ],
        [
            'name' => '女',
            'value' => self::GENDER_FEMALE,
        ],
    ];

    // 一对一： 所属的用户
    protected function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // 性别 字典转名称
    public function getGenderNameAttribute()
    {
        return getAttributeName(self::GENDER_OPTIONS, $this->gender);
    }
}
