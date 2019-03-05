<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => '请接受:attribute',
    'active_url'           => ':attribute不是有效的url链接',
    'after'                => ':attribute必须在:date之后',
    'after_or_equal'       => ':attribute 必须大于等于 :date.',
    'alpha'                => ':attribute只能包含字母',
    'alpha_dash'           => ':attribute只能包含字母、数字、下划线',
    'alpha_num'            => ':attribute只能包含字母、数字',
    'array'                => ':attribute只能是数组',
    'before'               => ':attribute必须在:date之前',
    'between'              => [
        'numeric' => ':attribute必须在:min到:max之间',
        'file'    => ':attribute大小必须在:minKB到:maxKB之间',
        'string'  => ':attribute长度必须在:min到:max之间',
        'array'   => ':attribute数组长度必须在:min到:max之间',
    ],
    'boolean'              => ':attribute field must be true or false.',
    'confirmed'            => ':attribute不一致',
    'date'                 => ':attribute不是有效的日期',
    'date_format'          => ':attribute不是:format日期格式',
    'different'            => ':attribute和:other不能相同',
    'digits'               => ':attribute 必须是 :digits 数字.',
    'digits_between'       => ':attribute 必须是在 :min 和 :max 之间的数字.',
    'distinct'             => ':attribute不允许重复',
    'email'                => ':attribute不是有效的邮箱',
    'exists'               => '请勿输入非法的:attribute',
    'filled'               => ':attribute为必填项',
    'image'                => ':attribute必须是图片',
    'in'                   => '请勿输入非法的:attribute',
    'in_array'             => ':attribute不在:other之中',
    'integer'              => ':attribute必须是整数',
    'ip'                   => ':attribute必须是有效的ip地址',
    'json'                 => ':attribute必须是有效的json数据',
    'max'                  => [
        'numeric' => ':attribute不能超过:max',
        'file'    => ':attribute大小不能超过:maxKB',
        'string'  => ':attribute长度不能超过:max',
        'array'   => ':attribute数组长度不能超过:max',
    ],
    'mimes'                => ':attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute不能小于:min.',
        'file'    => ':attribute大小不能小于:minKB',
        'string'  => ':attribute长度不能小于:min位',
        'array'   => ':attribute数组长度不能小于:min',
    ],
    'not_in'               => '请勿输入非法的:attribute',
    'numeric'              => ':attribute必须为纯数字',
    'present'              => ':attribute必须填写',
    'regex'                => ':attribute格式不对',
    'required'             => ':attribute必须填写',
    'required_if'          => ':attribute必须填写，当:other为:value时',
    'required_unless'      => ':attribute field is required unless :other is in :values.',
    'required_with'        => ':attribute field is required when :values is present.',
    'required_with_all'    => ':attribute field is required when :values is present.',
    'required_without'     => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same'                 => ':attribute必须和:other一致',
    'size'                 => [
        'numeric' => ':attribute必须为:size位',
        'file'    => ':attribute大小必须为:sizeKB',
        'string'  => ':attribute长度必须为:size位',
        'array'   => ':attribute数组长度必须为:size',
    ],
    'string'               => ':attribute必须为字符',
    'timezone'             => ':attribute必须为有效时区',
    'unique'               => ':attribute 已存在',
    'url'                  => ':attribute链接格式不对',

    'week_array'                  => ':attribute 格式不对',
    'check_date'                  => ':attribute 格式不对，结束日期要在开始日期之后',
    'src_illegal' => '编辑器中有非法链接,请重新排查',
    'exist_strict' => '请勿输入非法的:attribute',
    'unique_strict' => ':attribute 已存在',
    'extension' => '文件类型不是: :extension',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],
];
