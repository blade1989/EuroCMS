<?php

$myKey = $_POST['mykey']; // this is your posted keygen value
$encryptThis = '$usr_name';
$cipher = MCRYPT_BLOWFISH;
$mode = MCRYPT_MODE_ECB;
$iv_size = mcrypt_get_iv_size($cipher, $mode);
$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
$encOutput = mcrypt_encrypt($cipher, $myKey, $encryptThis, $mode, $iv);

// your encrypted text is now in the variable $encOutput

?>