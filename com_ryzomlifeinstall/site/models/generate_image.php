<?php

/**
 *
 * @desc generate homin name from ttf file
 * 
 */

 function getHominTitle($aTxt,$aFont,$aSize=12){
	if (isset($aTxt) && isset($aFont)) {

		
		$text = $aTxt;

		$fontfile="../../../assets/fonts/".strtolower($aFont).".ttf";
		
		error_log($fontfile);
		$size = $aSize;
		$fontangle = 0;
		$textcolor = "000033";


		// text size
		$box = imagettfbbox($size, $fontangle, $fontfile, $text);
		$textwidth = abs($box[4] - $box[0]);
		$textheight = abs($box[5] - $box[1]);
		$imagewidth = $textwidth;
		$imageheight = $textheight+$textheight/2;

 		$xcord=0;
		$ycord=$textheight;

		// on cree l'image a la bonne taille, avec un peu de marge
		$img = imagecreatetruecolor($imagewidth, $imageheight);

		//256 color palet and generate 8 bit png
		imagetruecolortopalette($img, true, 256);

		// background and font color
		$bg = imagecolorallocate($img, 127, 127, 127);
		$fg = imagecolorallocate($img, 0, 0, 0);

		// background color => and make it transparent
		imagefilledrectangle($img, 0, 0, $imagewidth, $imageheight, $bg);
		imagecolortransparent($img, $bg);

		// text color
		$textcolor="FFFFFF";
		if( eregi( "([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})", $textcolor, $textrgb ) )
		{$textred = hexdec( $textrgb[1] );  $textgreen = hexdec( $textrgb[2] );  $textblue = hexdec( $textrgb[3] );}
		$fontcolor = imagecolorallocate($img, $textred, $textgreen, $textblue);

		// write texte
		imagettftext($img, $size, $fontangle, $xcord, $ycord, $fontcolor, $fontfile, $text);

		// send image
		header('Content-type: image/png');
		imagepng($img);
		imagedestroy($img);

	}
}
getHominTitle($_GET['ut'],$_GET['ur'],$_GET['us']);
?>