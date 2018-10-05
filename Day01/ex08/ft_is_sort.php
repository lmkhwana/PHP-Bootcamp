#!/usr/bin/php
<?PHP
    function    ft_is_sort($array)
    {
        $sorted = $array;
        sort($array);
        return ($sorted == $array);
    }
?>