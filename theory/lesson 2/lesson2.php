<?php
//Task 1
$a = -6;
$b = -9;
if ($a>=0 && $b >=0){
    echo 'a-b= '.($a-$b);
}else if ($a<0 && $b<0){
    echo 'a*b= '.($a*$b);
}else {
    echo 'a+b= '.($a+$b);
};
echo '<br>';


//Task 2
echo 'Ваше число а= '.$a = rand(0,15).'<br>';
switch ($a) {
    case 1:
        echo '1'.'<br>';
    case 2:
        echo '2'.'<br>';
    case 3:
        echo  '3'.'<br>';
    case 4:
        echo  '4'.'<br>';
    case 5:
        echo  '5'.'<br>';
    case 6:
        echo '6'.'<br>';
    case 7:
        echo '7'.'<br>';
    case 8:
        echo '8'.'<br>';
    case 9:
        echo '9'.'<br>';
    case 10:
        echo '10'.'<br>';
    case 11:
        echo '11'.'<br>';
    case 12:
        echo '12'.'<br>';
    case 13:
        echo ' 13'.'<br>';
    case 14:
        echo '14'.'<br>';
    case 15:
        echo '15'.'<br>';
        break;
};

//Task 3
function sum(int $arg1,int $arg2) : int
{
    return $arg1+$arg2;
};

function differ(int $arg1,int $arg2) : int
{
    return $arg1-$arg2;
};

function mult(int $arg1,int $arg2) : int
{
    return $arg1*$arg2;
};

function div(int $arg1,int $arg2) : float
{
    return $arg1/$arg2;
};


//Task 4

function mathOperation($arg1, $arg2, $operation)
{
        switch($operation){
            case ('sum') :
                echo sum($arg1,$arg2);
                break;
            case ('differ') :
                echo differ($arg1,$arg2);
                break;
            case ('mult') :
                echo mult($arg1,$arg2);
                break;
            case ('div') :
                echo div($arg1,$arg2);
                break;
            default:
                echo 'Не верная операция';
                break;
        };
};

//Task 6
function power($val,$pow)
{
    if ($pow != 0)
    {
        return $val * power ($val, $pow - 1);
    }
    return 1;
};
echo 'Степень 2^3 = '.power(2, 3);

//Task 5
echo $HTML_Code='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 2</title>
</head>
<body>
<h1>Домашнее задание 2</h1>
</body>
<footer>'.date('Y').
'</footer>
</html>';
?>

