<?php
if (!function_exists('upper')) {
    # code...
    function upper($value)
    {
        return Text\Format::upperText($value);
    }
}
if (!function_exists('lower')) {

    function lower($value)
    {
        return Text\Format::lowerText($value);
    }
}
