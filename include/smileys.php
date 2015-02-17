<?php
  $smiles = array(
    'xD'	=> 'devil.png',
    '>:)'	=> 'devil.png',
    'x('	=> 'angry.png',
    ':(('	=> 'cry.png',
    ':*'	=> 'kiss.png',
    ':))'	=> 'laugh.png',
    ':D'	=> 'laugh.png',
    ':-D'	=> 'laugh.png',
    ':x'	=> 'love.png',
    '(:|'	=> 'sleepy.png',
    ':)'	=> 'smile.png',
    ':-)'	=> 'smile.png',
    ':('	=> 'sad.png',
    ':-('	=> 'sad.png',
    ';)'	=> 'wink.png',
    ';-)'	=> 'wink.png'
  );

  foreach($smiles as $key => $img) {
  	$msg = str_replace($key, '<img src="emotions/'.$img.'" height="18" width="18" />', $msg);
  }
  echo $msg;
?>