<?php 
if(isset($_POST['reg'])){ // POST - лучше использовать для регистрации, авторизации, финансовых операций, а GET используется для 
    //пагинации, там где не нужна безопасность
    //print_r($_POST['data']);
    $login = $_POST['data'][0];
    $password = md5($_POST['data'][1]);
    //print_r($_POST);

    //file_put_contents('users.txt', 'fasfasf');
    //file_get_contents('users.txt');
    $res = "login: $login;password: $password";
    $files = '';
    foreach($_FILES['file']['error'] as $key=>$error){
        if($error == UPLOAD_ERR_OK){
            $id = uniqid();
            $type = explode('/', $_FILES['file']['type'][$key])[1];
           
            //$file = $file + 'dsfgsdg'
            $tmp_name = $_FILES['file']['tmp_name'][$key];
           
            if($type == 'jpg' || $type == 'jpeg' || $type == 'png'){
                $files .= "file: ".'FILES/'.$id.'.'.$type;
                if(move_uploaded_file($tmp_name,'FILES/'.$id.'.'.$type)){
                    echo 'Файл успешно загружен!';
                }else{
                    echo 'Произошла ошибка загрузки файла';
                }
            }
        }
    }
    $res .= "\n$files";
    file_put_contents('users.txt', $res);

    //улучшить этот код так чтобы данные из формы сохранять в файл
    /*
    $type = explode('/', $_FILES['file']['type'])[1];
    if($type == 'jpg' || $type == 'jpeg' || $type == 'png'){
        if(move_uploaded_file($_FILES['file']['tmp_name'],'FILES/'.uniqid().'.'.$type)){
            echo 'Файл успешно загружен!';
        }else{
            echo 'Произошла ошибка загрузки файла';
        }
    }else{
        echo 'Загрузите нужный тип!';
    }*/
}
?>
<form method="post" enctype="multipart/form-data">
    <p>
        <label for='login'>Login: </label><input type="text" name="data[]" id="login">
    </p>
    <p>
        <label for="password">Password: </label><input type="password" name='data[]' id='password'>
    </p>
    <p>
        <select name="data[]" id="">
            <option value="BY">BY</option>
            <option value="RU">RU</option>
        </select>
    </p>
    <p>
        P1: <input type="text" name='data[]'>
    </p>
    <p>
        P2: <input type="text" name='data[]'>
    </p>
    <p>
        <input type='file' name='file[]'>
    </p>
    <p>
        <input type='file' name='file[]'>
    </p>
    <p>
        <button name='reg'>Регистрация</button>
    </p>
</form> 
