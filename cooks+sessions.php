<?php
//сессии (на стороне сервера), куки (на стороне клиента в браузере)
session_start();
session_destroy(); // удалить все данные сессии

/*if(isset($_SESSION['counter'])){
    $_SESSION['counter']++;
    echo $_SESSION['counter'];
}else{
    $_SESSION['counter'] = 0;
}*/
unset($_SESSION['counter']); // удалить конкретную переменную сессии

//куки (не более 4 кб)
//echo time();
if(isset($_COOKIE['counter'])){
    setcookie('counter', $_COOKIE['counter'] + 1, time() + 24*60*60);
    echo $_COOKIE['counter'];
}else{
    setcookie('counter', 0, time() + 24*60*60);
}