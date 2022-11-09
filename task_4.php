<?php


$serial = ['A', 'B'];
foreach ($serial as $item1) {
    foreach ($serial as $item2) {
        foreach ($serial as $item3) {
            for ($i = 000; $i <= 999; $i++) {
                // echo $item1, str_pad($i, 3, "0", STR_PAD_LEFT), $item2, $item3, "\n";
                $numbers = sprintf('%s%03d%s%s', $item1, $i, $item2, $item3);
                $numbersArr[] = array($numbers);
                foreach ($numbersArr as  $val) {
                    if ($i === 111  ) {
                        unset($numbersArr[$i]);
                    }
                    if ($i !== 222 ) {
                        unset($numbersArr[$i]);
                    }
                }
            }
        }
    }
//    }
    foreach ($numbersArr as $value){
        var_dump($value);
    }



