--TEST--
ffmpeg getFrameCount test
--SKIPIF--
<?php extension_loaded('ffmpeg') or die("ffmpeg extension not loaded"); ?>
--FILE--
<?php
$mov = new ffmpeg_movie(dirname(__FILE__) . '/test.avi');
printf("ffmpeg getFrameCount(): %0.2f\n", $mov->getFrameCount());
?>
--EXPECT--
ffmpeg getFrameCount(): 120.00
