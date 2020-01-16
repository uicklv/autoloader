<?php

require_once '../vendor/autoload.php';

use App\Rgb\Creatergb;

$a = new Creatergb(100, 100, 100);
$mixedColor = $a->mix(new Creatergb(200,200,200));
var_dump($mixedColor->get_red());
//var_dump($mixedColor->get_green());
//var_dump($mixedColor->get_blue());












