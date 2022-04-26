<?php

use App\NumericKeyboardDecoder;

require __DIR__.'/vendor/autoload.php';

$phase = readline("Wpisz zdanie: ");

$decoder = new NumericKeyboardDecoder($phase);
$decodedPhase = $decoder->decode();

echo $decodedPhase;