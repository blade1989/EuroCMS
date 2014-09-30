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

<?php

	echo "$get_html_tags";



?>