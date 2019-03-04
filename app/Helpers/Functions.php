<?php

if (! function_exists('getAttributeName')) {
    /**
     * 获取属性名
     * @param $options
     * @param $value
     * @return string
     */
    function getAttributeName($options, $value)
    {
        foreach ($options as $option) {
            if ($option['value'] == $value) {
                return $option['name'];
            }
        }

        return '';
    }
}