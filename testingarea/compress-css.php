<?php
    header('Content-type: text/css');
    ob_start('compress_css');
    function compress_css($buffer) {
    /* remove comments in css file */
    $buffer = preg_replace('!/*[^*]**+([^/][^*]**+)*/!', '', $buffer);
    /* also remove tabs, spaces, newlines, etc. */
    $buffer = str_replace(array("r", "n", "rn", "t", ' ', ' ', ' '), '', $buffer);
    return $buffer;
    }

    /* a list of your css files */
    include('css/class.css');
    include('css/flexslider.css');
    include('css/jquery.fancybox.css');
    include('css/pace.css');
    include('css/responsive.css');
    include('css/test.css');
    ob_end_flush();
?>