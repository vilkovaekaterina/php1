<?php
$a = 5;
$b = '05';
var_dump($a == $b);  // true так как идет сравнение по значению. 5=05
var_dump((int)'012345');     // 12345, т.к. 0 считается не значашим числом(ноль стоит в начале)
var_dump((float)123.0 === (int)123.0); //  false, т.к. сравнение по типу данных. float != int
var_dump((int)0 === (int)'hello, world'); //  true, т.к. сравнение по типу данных. int = int

echo '<br><h1>Задание со звездочкой</h1><br>';
echo 'a='.$a = 1;
echo '<br>';
echo 'b='.$b = 4;
echo '<br>';
echo 'После обмена местами:<br>a='.$a = $a+$b-($b=$a);
echo '<br>';
echo 'b='.$b;

?>
