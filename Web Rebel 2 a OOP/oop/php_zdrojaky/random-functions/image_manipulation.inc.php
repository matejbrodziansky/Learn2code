<?php

/**
 * open_image
 * vrati image alebo FALSE, ak nie je spravneho formatu / sa ho nepodarilo createnut
 *
 * @param  [type] $file [description]
 * @return [type]       [description]
 */
function open_image($file)
{
	$info = new stdclass;
	list($info->width, $info->height, $info->type, $info->attr) = @getimagesize($file);

	if ($info->type == IMAGETYPE_GIF)
	{
		$image = @imagecreatefromgif($file);
		if (!$image) $failed = true;
	}
	else
	if ($info->type == IMAGETYPE_JPEG)
	{
		$image = @imagecreatefromjpeg($file);
		if (!$image) $failed = true;
	}
	else
	if ($info->type == IMAGETYPE_PNG)
	{
		$image = @imagecreatefrompng($file);
		if (!$image) $failed = true;
	}
	else $failed = true;

	if ($failed)
	{
		@imagedestroy($image);
		return false;
	}

	$info->image = $image;

	return $info;
}



/**
 * create_thumbnail
 * filename je nazov povodneho suboru
 *
 * @param  [type]  $filename [description]
 * @param  integer $size     [description]
 * @return [type]            [description]
 */
function create_thumbnail($filename, $size = 125)
{
	if ($size < 16) return false;

	$img = open_image($filename);
	if (!$img) return false;

	$thname = substr($filename, 0, strrpos($filename,'.'))."_th".$size.".jpg";

	$newwidth = $img->width; $newheight = $img->height;

	if ($img->width <= $size && $img->height <= $size)
	{
	  $newwidth = $img->width;
	  $newheight = $img->height;
	}
	else
	{
		if ($img->width > $img->height)
		{
			$newwidth = $size;
			$newheight = ($img->height / $img->width) * $size;
		}

		if ($img->width <= $img->height)
		{
			$newheight = $size;
			$newwidth = ($img->width / $img->height) * $size;
		}
	}

	$newimg = @imagecreatetruecolor($newwidth, $newheight);
	@imagefilledrectangle($newimg, 0, 0, $newwidth, $newheight, imagecolorallocate($newimg, 255, 255, 255));
	@imagecopyresampled($newimg,$img->image,0,0,0,0,$newwidth,$newheight,$img->width,$img->height);

	$res = @imagejpeg($newimg, $thname, 85);

	@imagedestroy($img->image);
	@imagedestroy($newimg);

	if (!$res) return false;
	return true;
}



/**
 * delete_image
 *
 * @param  [type] $filename [description]
 * @return [type]           [description]
 */
function delete_image($filename)
{
	@unlink($filename);
	@delfiles(substr($filename, 0, strrpos($filename,'.'))."_th*.jpg");
}



/**
 * create_thumbnail_square
 *
 * vytvori stvorcovy thumbnail obrazku na rovnakom mieste ako sa nachadza povodny subor
 * obrazok sa roztiahne/oreze tak, aby vyplnil celu plochu
 *
 * @param  [type]  $filename [description]
 * @param  integer $size     [description]
 * @return [type]            [description]
 */
function create_thumbnail_square($filename, $size = 150)
{
	if ($size < 16) return false;
	$img = open_image($filename);
	if (!$img) return false;
	// todo - ak sa velkost zhoduje, nic neresizovat, iba skopirovat
	$thname = substr($filename, 0, strrpos($filename,'.'))."_th".$size.($img->type == IMAGETYPE_JPEG ? ".jpg" : ".png");
	$newimg = @imagecreatetruecolor($size, $size);
	imagealphablending($newimg, true);
	$transparent = imagecolorallocatealpha( $newimg, 0, 0, 0, 127 );
	imagefill( $newimg, 0, 0, $transparent );
	if ($img->width > $img->height)
		@imagecopyresampled($newimg,$img->image,0,0,($img->width - $img->height)/2,0, $size,$size,$img->height,$img->height);
	else
		@imagecopyresampled($newimg,$img->image,0,0,0,($img->height - $img->width)/2, $size,$size,$img->width,$img->width);
	if ($img->type == IMAGETYPE_JPEG)
		$res = @imagejpeg($newimg, $thname, 95); // zodpoveda to ~77 vo Photoshope
	else
	{
		imagealphablending($newimg, false);
		imagesavealpha($newimg, true);
		$res = @imagepng($newimg, $thname, 9, PNG_NO_FILTER);
	}
	@imagedestroy($img->image);
	@imagedestroy($newimg);
	if (!$res) return false;
	return true;
}