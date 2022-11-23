<?php
$word = "puppy";
$a = 3;
for ($i = 0; $i < strlen($word); $i++)
{
    $b = ord($word[$i]);
    $b += $a;
    $word[$i] = chr($b);
}
echo $word, "\n";
for ($j = 0; $j < strlen($word); $j++){
    $b =ord($word[$j]);
    $b -= $a;
    $word[$j] = chr($b);
}
echo $word;
