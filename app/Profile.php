<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $appends = [
        'gender_name',
    ];

    const GENDER_MALE = 1;
    const GENDER_MALE_NAME = '男';

    const GENDER_FEMALE = 2;
    const GENDER_FEMALE_NAME = '女';

    const GENDER_OPTIONS = [
        [
            'value' => self::GENDER_MALE,
            'name' => self::GENDER_MALE_NAME,
        ],
        [
            'value' => self::GENDER_FEMALE,
            'name' => self::GENDER_FEMALE_NAME,
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
