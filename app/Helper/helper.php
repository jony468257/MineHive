<?php

/**
 * @param $array
 * @param $subject
 * @return array|mixed|string|string[]
 */
function stringReplace($array, $subject): mixed
{
    $str = [
        'value' => $subject
    ];
    foreach ($array as $value) {
        $str['value'] = str_replace($value[0], $value[1], $str['value']);
    }
    return $str['value'];
}
