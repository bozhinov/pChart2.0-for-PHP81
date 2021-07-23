<?php
/* CAT:Barcodes */

/* Include all the classes */ 
require_once("bootstrap.php");

use pChart\pDraw;
use pChart\Aztec\Aztec;

/* Create a pChart object and associate your dataset */ 
$myPicture = new pDraw(700,230);

// Text to be encoded
$text = 'Hello World!';

// Encode the data
$aztec = new Aztec($myPicture);
$aztec->encode($text);

/* Render the picture (choose the best way) */
$myPicture->autoOutput('temp/example.aztec.basic.png');
