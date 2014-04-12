<?php
// Assuming the above tags are at www.example.com
$tags = get_meta_tags('http://www.eurobytes.nl/tutorials/nemo-the-file-manager');

// Notice how the keys are all lowercase now, and
// how . was replaced by _ in the key.
echo '<b>Author</b>:'. $tags['author']. '<br>';       // name
// echo undefined: '<b>keywords</b>:'. $tags['keywords'].'<br>';     // php documentation
echo '<b>description</b>:'. $tags['description'].'<br>';  // a php manual
// Undefined index: '<b>geo_position</b>:'. $tags['geo_position'].'<br>'; // 49.33;-86.59
?>
