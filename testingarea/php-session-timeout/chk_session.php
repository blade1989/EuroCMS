<?php
session_start();
$name = $_SESSION["w3name"];
if($name == '')
{
	//session expired
	echo "1";
} else {
	//session not expired
    echo "0";
}
?>