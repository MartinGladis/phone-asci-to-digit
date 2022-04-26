<?php

use App\NumericKeyboardDecoder;

require __DIR__.'/vendor/autoload.php';

$decoder = new NumericKeyboardDecoder('Ala ma kota a kot ma ale');
$decodedPhase = $decoder->decode();

echo $decodedPhase;