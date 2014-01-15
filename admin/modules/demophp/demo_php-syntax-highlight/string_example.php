<?php code(); ?>
	$string = '[ place your "highly quoted" PHP string here ]';
<?php code(); ?>

<?php
function code() {
	static $on = false;
	if ( !$on ) { 
		ob_start();
	} else {
		$buffer = "<?\n" . ob_get_contents() . "?>";
		ob_end_clean();
		highlight_string( $buffer );
	}
	$on = !$on;
}
?>