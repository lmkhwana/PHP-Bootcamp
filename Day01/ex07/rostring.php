#!/usr/bin/php
<?PHP
    if ($argv[1] != NULL)
    {
        $arr = array_filter(explode(' ', $argv[1]));
        $return = array_slice($arr, 1);
        foreach($return as $w)
        {
            echo ($w." ");
        }
        echo ($return[0]."\n");
    }
?>