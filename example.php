<?php


//$a= 3;
//$b = 7;
//$c = ++$a + --$b;
//var_dump($c);
//$a++;
//$b--;
//var_dump($a);
//var_dump($b);

//    $a = 4;
//    $b = 31;
//    $c = 0;
//    if ($a == $b) {
//    $c =10;
//    } elseif ($a < $b) {
//        $c= 100;
//    } else {
//        $c = 1000;
//    }
//
//    var_dump($c);

//$a = 2;
//$c = $a > 10 ? 2 : ($a > 5 ? 3 : 4); // если а больше 10 то 2 (если а больше 5 то 3 иначе 4)
//var_dump($c);

//$a = null;
//if ($a == null){
//    $b = 2;
//} else {
//    $b = $a;
//}
//var_dump($b);
//$c = $a ?? 10; // проверка на null
//var_dump($c);
//$d = 100;
//$e = $d ?? 'abc'; // проверка на null
//var_dump($e);
//$a = null;
//$b = null;
//$c = $a ?? $b ?? 22; //двойная проверка на null
//var_dump($c);

//lesson 3.3
//$a = false;
//$b = true;
//if ($a && $b) {
//    $c = 1;
//} else {
//    $c = 0;
//}
//var_dump($c);
//if ($a || $b) {
//    $d = 1;
//} else {
//    $d = 0;
//}
//var_dump($d);
//lesson 4.1
//lesson 4.1
//$str1 = 'Hello world';
//echo $str1;
//$str2 = 'хочу сказать \'привет\'';
//echo $str2;
////  \n новая строка
//// \t табуляция
//
//$str3 = 'hello \n hello \t no!'; //в одинарных не работает
//echo $str3;
//
//$str1 = "Hello 'world!'\n \t hello";
//echo $str1;
//$a =10;
//$str2 = "\nмне $a лет";
//echo $str2;
//$str1 = <<<EVG
//Привет мир
//Как дела? "Хорошо"
//строка через here\doc - синтаксис
//EVG;
//echo $str1;
//// контекцинация
//$str2 = "\nHello ";
//$str3 = 'world';
//$str4 = $str2 . $str3;
//echo $str4;
//$str2 .= "whote";
//echo $str2;

//$str = 'hello';
//var_dump($str);
//$str2 = 'привет';
//var_dump($str2);
//
//$length = strlen($str);
//var_dump($length);
//$length2 = mb_strlen($str2); // перевод с мультибайтовой системы, тоесть деленая на 2
//var_dump($length2);
//$str = 'hello';
//$e = $str[1];
//echo $e;
//$o = $str[strlen($str) - 1];
//echo $o;
//
//$str[1] = 'E';
//echo $str;

//lesson 4.2

//$str = 'hello world';
//$world1 = substr($str, 0, 5);
//echo $world1;
//
//$index = strpos($str, 'hello');
//var_dump($index);
//$str = "abc abc";
//$index = strpos($str, 'abc');
//var_dump($index);
//$index2 = strpos($str, 'nds'); // регистр тоже важен, stripos -не важен регистр
//var_dump($index2);
//$str = 'hello world';
//$str2 = str_replace('hello', 'hi', $str);// регистр тоже важен, str_ireplace -не важен регистр
//echo $str2;
//$a ='abc abc';
//$b = str_replace('abc', '123', $a, $count);
//echo $b;
//var_dump($count); //сколько раз встречается

//$str = 'Hello World';
//$str2 = strtolower($str); //перевод в нижний регистр
//echo $str2;
//$str3 = strtoupper($str); //перевод в верхний регистр
//echo $str3;
//$str = "   hello   ";
//$str2 = trim($str); //убирает пробелы табуляцию и тд
//echo $str2;
//$str3 = rtrim($str);
//$str4 = ltrim($str);
//echo $str3;
//echo $str4;


//lesson 5 циклы

//$test = [10 ,23,45,67,78,34,90,];
//$lengthCount = count($test);
//    for ( $i = 0; $i < $lengthCount; $i++) {
//        if( $test[$i] > 70){
//            echo "Кандидат с номером {$i} набрал более 70 баллов\n";
//        }
//    }
//for ($i = 200; $i > 0; $i--) {
//    if ($i % 5 ===0) {
//        echo "Число {$i} делиться на 5";
//    }
//}

//
// $testResults = ["Ivan" => 32, "Vova" => 234, "Olga" => 76, "Inna" =>90, "Nik" => 54, "Jhon" =>32, "Michale" => 94];
//foreach ( $testResults as $key => $testResult) {
//    if ($testResult > 70 ) {
//        echo "Кандидат {$key} набрал более 70 баллов\n";
//    }
//}
//$testArray = []



//

