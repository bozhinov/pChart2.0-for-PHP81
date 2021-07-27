<?php
/* CAT:Barcodes */

/* Include all the classes */ 
require_once("bootstrap.php");

use pChart\pDraw;
use pChart\Barcodes\{
	Barcodes,
	Encoders\Codes
};

/* Create a pChart object and associate your dataset */ 
$myPicture = new pDraw(700,230);

$barcodes = new Barcodes($myPicture);
$barcodes->encode("Do what you want !", "code128", []);

/* Render the picture (choose the best way) */
$myPicture->autoOutput("temp/encode128.png");