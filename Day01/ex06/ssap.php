#!/usr/bin/php
<?PHP

    $i = 1;

    $string = "";
    while ($i < $argc)
    {
        $string .= $argv[$i]." ";
        $i++;
    }
    $return = array_filter(explode(" ", $string));
    sort($return);
    $str = "";
    foreach($return as $element)
    {
        $str .= $element."\n";
    }
    echo($str);

?>