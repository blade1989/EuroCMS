<?php

	header('Content-type: text/css; charset:UTF-8');
	$url_color = "#3465A4";
	$body_html_background_color = "#F9F9F9"

?>

a {
    color: <?php echo "$url_color"; ?>;
    text-decoration: none;
    outline: none;
}

body,html {
	background-color: <?php echo "$body_html_background_color";?>;	
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

#wrap {
	margin: 20px auto;
	width: 80%;
}

article {
	border: 1px solid #CCCCCC;
	background-color: #FFFFFF;
	padding: 25px;
}


?>