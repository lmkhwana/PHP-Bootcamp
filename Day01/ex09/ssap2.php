#!/usr/bin/php
<?PHP

    $i = 1;
    while ($i < $argc)
    {
        $string .= $argv[$i++]." ";
    }
    $str = strtolower($string);
    sort($str);
    $arr = array_filter(explode(' ', $str));
    print_r($arr);

?>