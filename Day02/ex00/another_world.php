#!/usr/bin/php
<?PHP
    $str = $argv[1];

    $str = preg_replace('/\s\s+/', ' ', $str);
    $str = trim($str);
    echo $str."\n";
?>