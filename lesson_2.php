<?php
//функции
function summa($a, $b){ //определение функции
    echo $a + $b . "<br />";
}

function factorial($number){
    //5!=1*2*3*4*5
    $f = 1;
    for($i=1;$i<=$number;$i++){
        $f *= $i; //$f = $f * $i
    }
    return $f;
}

summa(10, 20); // вызов функции
summa(44, 55);
summa(100, 200);

$a = factorial(5);
$b = factorial(5);
echo $a + $b;

//анонимная функция (без имени, только параметры)
$c = function($a = 0, $b = 0, $c = 0){
    echo $a * $b * $c;
};
$c();

// генератор - функция
function generate(){
    yield 2;
}

foreach(generate() as $number){
    echo $number."<br />";
}

function geneN(){
    for($i=0;$i<=100;$i+=1){
        if($i >= 10 && $i <= 50){

        }else{
            yield $i; // еще - это yield
        }
    }
}
foreach(geneN() as $n){
    echo $n."<br />";
}

//константы
const a = 10;
const PI = 3.14;
echo a."<br />";
echo PI."<br />";

define('E', 2.7); // функция-константа
echo E."<br />";
echo defined('E')."<br />";//вернет true(1) если константа существует


echo __FILE__."<br />"; // магические константы
echo __DIR__."<br />";
echo __CLASS__."<br />";
echo __FUNCTION__."<br />";
echo "<br /><br />";
echo isset($c); // проверка переменной
//1 - true пустое знач - false

//1,true,не пустая строка -> true    0,пустое знач, пустая строка -> false
//''->false
if('1kljafklasf'){ //true
    echo 'Ok';//если true
}else{
    echo 'No';//если false
}
echo "<br />";
$h = "afasfasf";
echo empty($h);
echo "<br />";
$login = 'user1';
echo $login;
unset($login); // удаление переменной
echo $login;

$users = ['User4','User1','User2','User3'];
foreach ($users as $one) {
    echo $one . "<br>";
}


$f1 = in_array('User1',$users); // проверка на существование элемента в массиве
echo $f1;
echo count($users);// колличество элементов 
echo sizeof($users);//  колличество элементов 
echo "<pre>";
print_r($users);
echo "</pre>";

shuffle($users); // перемешать элементы массива
echo "<pre>";
print_r($users); // вывести массив 
echo "</pre>";

asort($users); // сортировать массив по возрастанию
echo "<pre>";
print_r($users); // вывести массив 
echo "</pre>";
 
sort($users, -1);
echo "<pre>";
print_r($users); // вывести массив 
echo "</pre>";
$users_1 = ['name' => 'User 1', 'age' => 20]; 
ksort($users);
echo "<pre>";
print_r($users_1); // вывести массив 
echo "</pre>";


//создать одномерный массив из чисел. Найти сумму, среднее знач, мин, макс элементы этих чисел через цикл foreach
//создать 2-х мерный массив чисел. Найти сумму, среднее знач, мин, макс элементы этих чисел через цикл foreach
//создать ф-цию нахождения факториал числа через рекурсию



$users1 = [3,5,6,7,8,10];
$s = 0;
foreach ($users1 as $one) { //3 5 6
    $s = $s + $one;//$s=0+3=3   $s=3+5=8  $s=8+6=14
}

$sr = $s / count($users1); // count вместо lenght в PHP
echo $s."<br />";
echo $sr."<br />";
echo min($users1)."<br />";
echo max($users1)."<br />";

//echo $users1[0] + $users1[1] + $users1[2]."<br>";

//$users2 = [3,5,6];
//echo ($users2[0] + $users2[1] + $users2[2])/3 ."<br>";


$users_new = [  
    [22, 22],
    [36, 21] 
];
$two=0;
$count=0;
$min=$users_new[0][0];//22
$max=$users_new[0][0];//22
foreach ($users_new as $three){// 1 заход в цикл $three = [22,22]   2 заход $three = [36,21]
    foreach ($three as $four) {//для 1 захода цикла выше 1 заход $four = 22  2 заход $four = 22     для 2 захода цикла выше 3 заход $four = 36  4 заход $four = 21  
        $two = $two + $four;
        $count = $count + 1;
        if($four < $min){//22 < 22   22 < 22  36 < 22  21 < 22
            $min = $four;//21
        }
        if($four > $max){
            $max = $four;
        }
    }
}

echo $two . "<br>";
echo $two / $count;



$users_5 = [
    //  0         1         2
    ['User 1', 'User 2', 'User 3'],//0
    ['User 4', 'User 5', 'User 6'],//1
    ['User 7', 'User 8', 'User 9'] //2
];

$i = 0;
while($i < 3){// $i=0,1,2 (строки)
    //$i=0  $i=1  $i=2
    $j=0;
    while($j < 3){//$j=0,1,2 (столбцы)
        //$i=0 $j=0 -> User1   $users_5[$i][$j]

        //$i=0 $j=1 -> User2
        //$i=0 $j=2 -> User3


        //$i=1 $j=0 -> User4
        //$i=1 $j=1 -> User5
        //$i=1 $j=2 -> User6

        //$i-2 $j=0 -> User7
        //$i=2 $j=1 -> User8
        //$i=2 $j=2 -> User9
        echo $users_5[$i][$j];
        $j++;
    }

    $i++;
}

echo '<br />';
$a = [3,4,5,2,2,3,4,56,1];
$min = $a[0];//3
$max = $a[0];//3
foreach($a as $b){//3 4 5 2 2 3 4 56 1
    if($b < $min){//3 < 3->false  4 < 3 -> false  5 < 3 -> false  2 < 3 -> true 2 < 2 -> false 3 < 2 ->false 4 < 2 -> false 56 < 2 -> false  1 < 2 -> true
        $min = $b;//$min=2 $min = 1
    }
    if($b > $max){
        $max = $b;
    }
}
echo $min."<br />";
echo $max;


//5!=1*2*3*4*5=120
// рекурсия - это вызов функции внутри самой функции
function factorial_1($n){//$n = 5 $n = 4 $n =3 $n=2 $n=1
    if($n == 1) return 1;//5 == 1 4 == 1 3==1 2==1 1==1
    else $n * factorial_1($n - 1);//5*4*3*2*1=120
}


echo factorial_1(5)."<br><br>";

//рекурсивно перебрать папку и вывести содержимое всех папок


function listFiles($path){
    $files = scandir($path);
    foreach($files as $file){
        if($file != '.' && $file != '..'){
            if(is_dir($path.'/'.$file)){
                listFiles($path.'/'.$file);
            }else{
                echo $path.'/'.$file."<br />";
            }
        }
    }
}
listFiles('papka');


//ООП, обработка форм на php, куки, сессии, БД, Symfony