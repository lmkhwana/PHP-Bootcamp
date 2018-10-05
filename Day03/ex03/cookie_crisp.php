<?php
    if (array_key_exists("action", $_GET))
    {
        $var = $_GET;
        if (array_key_exists("name", $var))
        {
            if ($var['action'] == "set" && array_key_exists("value", $var))
                setcookie($var['name'], $var['value']);
            else if ($var['action'] == "get" && $_COOKIE[$var['name']] != NULL)
                echo ($_COOKIE[$var['name']])."\n";
            else if ($var['action'] == "del")
                setcookie($var['name'], "", time() + 3600);
        }
    }
?>