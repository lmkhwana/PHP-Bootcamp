<?php
    $file = "../img/42.png";
    $type = "image/png";
    header('Content-type:'.$type);
    readfile($file);
?>