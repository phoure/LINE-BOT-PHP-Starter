<?php
  	$background = imagecreatefrompng("http://drivegay.com/drive/2016/upload/p6AJTJsfOfkIczo34PiC.png");

			   header('Content-type: image/png');
		echo 	imagepng($background);
			imagedestroy($background);
?>
