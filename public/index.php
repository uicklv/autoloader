<?php

require_once '../vendor/autoload.php';

//require_once '../src/Ivanov/Currency.php';
//require_once '../src/Petrov/Currency.php';


use \Project\pr\Currency as Curr;
use \App\Ivanov\pr\Currency as ivanovCurrency;
use \App\Petrov\Currency as petrovCurrency;

$Curr = new Curr();
$Ivanov = new ivanovCurrency();
$Petrov = new petrovCurrency();






