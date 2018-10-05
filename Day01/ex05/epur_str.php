#!/usr/bin/php
<?PHP
    if ($argc == 2)
    {
        $array = array_filter(explode(' ', $argv[1]));
        $return = "";
        foreach ($array as $arr)
        {
            $return .= $arr." ";
        }
        echo (trim($return)."\n");
        
    }
?>
