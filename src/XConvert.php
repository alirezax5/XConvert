<?php

namespace alirezax5\XConvert;
class XConvert
{
    public static function convertFileSize($size, $from, $to)
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
        $from_index = array_search($from, $units);
        $to_index = array_search($to, $units);

        if ($from_index === false || $to_index === false)
            return "Invalid units";


        if (!is_numeric($size) || $size < 0)
            return "Invalid size";


        return $size * pow(1024, $from_index - $to_index);
    }

    public static function convertTimeUnit($time, $from, $to)
    {
        $units = array('s', 'ms', 'us', 'ns');
        $from_index = array_search($from, $units);
        $to_index = array_search($to, $units);

        if ($from_index === false || $to_index === false)
            return "Invalid units";

        if (!is_numeric($time) || $time < 0)
            return "Invalid time";

        return $time * pow(1000, $from_index - $to_index);
    }
}