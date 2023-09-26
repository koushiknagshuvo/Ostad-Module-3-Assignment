<?php


$text = "The quick brown fox jumps over the lazy dog.";

$allLowercase = strtolower($text);

echo $allLowercase ."\n";

$replacedString = str_replace("brown","red",$text);

echo $replacedString;






?>