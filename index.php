<?php
//if else
$a = 10;
$b = 15;
if($a > $b){
    echo $a + $b;
}else{
    echo $a * $b;
}
//switch
$counter = 110;
switch($counter){
    case 100:
        echo "100";
        break;
    case 101:
        echo "101";
        break;
    
    default:
        echo "default";
    break;
}



$mode = 'user';
switch($mode){
    case 'admin':
        //require_once 'admin_header.php';
        break;
    case 'user':
        //require_once 'user_header.php';
        break;
}

///while, do..while, for, foreach
$i = 0;
while ($i < 10){//10 < 10 -> false
    echo $i;
    $i++;
}

do{
    $j = 0;
    echo $j;//0
    $j++;
}while(false);

for($a=0;$a<10;$a++){//0..9
    echo $a;
}
for($a=9;$a>0;$a--){//9..0

}
$users = ["user1","user2","user3"];
//           0       1       2
echo $users[0];
for($a = 0;$a <= 2;$a++){
    echo $users[$a]."<br />";
}

foreach($users as $key=>$v){//$key=0 $v='user1' $key=1 $v='user2' $key=2 $v='user3' // цикл служит для перебора массива
    echo $v.'<br />';
}
$users_1 = ['name' => 'User 1', 'age' => 20]; //ассоциативный массив
echo $users_1['name'];

//многомерный массив
// а именно двумерный массив (состоит из строк и столбцов)
$users_new = [
    //    0                1
    ['name'=>'User 1', 'age'=>22], //0
    ['name'=>'User 2', 'age'=>21],  //1
    ['name'=>'User 3', 'age'=>23],  //2
    ['name'=>'User 4', 'age'=>21],  //1
];
echo '<br />';
foreach($users_new as $key=>$value){ //1 итерация цикла$key = 0 $value = ['name'=>'User 1', 'age'=>22]   2 итерация цикла $key = 0 $value = ['name'=>'User 1', 'age'=>22]
    echo $value['name']."<br />";
    echo $value['age']."<br />";
}


$i=1;
while($i < 11){
    //echo $i . "*7=" . $i*7 . "<br>";
    echo "$i * 7 = " . $i * 7 . " <br />";
    $i++;
}

$i=1;
while($i < 11){//$i=1 $i=2
    $j = 1;
    while($j < 11){//$i=1 ($j=1,2,3,4,5,6,7,8,9,10)   $i=2 ($j=1,2,3,4,5,6,7,8,9,10)
        echo "$j * $i = ".($i * $j). "&nbsp;&nbsp;&nbsp;&nbsp;";
 
        $j++;
    }
    echo "<br />";

    $i++;
}


?>