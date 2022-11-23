<?php
$deposit = 100000;
$depositEnd = $deposit * 2;
$percent = 8;
$incrementPercent = 2;
$incrementYears = 3;
$age = 0;
//for ($i = 0; $i<10; $i++) {
//    if ($deposit > $depositEnd) {
//        break;
//    }
//    if ($i != 0 && $i % $incrementYears == 0) {
//        $percent += $incrementPercent;
//    }
//    $deposit += $deposit/100 * $percent;
//    echo $i +1, ' (года) лет, ', "сумма на депозите = ", $deposit, "\t";
//}
while ($deposit < $depositEnd) {
    $age++;
    if ($age != 0 && $age % $incrementYears == 0) {
        $percent += $incrementPercent;
    }
    $deposit += $deposit/100 * $percent;
    echo $age, ' (года) лет, ', "сумма на депозите = ", $deposit, "\t";
}