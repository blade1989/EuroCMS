<?php
    function randomPassword($maxLength) {
    $possible = "#0123456789+bBcCdDfFgGhHjJkKmMnNpPqQrRsStTvVwWxXyYzZ-";
    if($maxLength == "") {
    $maxLength = 12;
    }
    while(($beat < $maxLength) && (strlen($possible) > 0)) {
    $beat++;
    // get rand character from possibles
    $character = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    // delete selected char from possible choices
    $possible = str_replace($character, "", $possible);
    $password .= $character;
    }
    return $password;
    }
?>