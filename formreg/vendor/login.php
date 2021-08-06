<?php

session_start();
$login = $_POST['login'];
$password = $_POST['password'];
$text = file_get_contents('bd.txt'); //достали всю строку

if(!$text){
    $_SESSION['msg'] = " Erorr data ";
    header('Location: ../index.php');
}else{
$mas=unserialize($text); // превращаем текст в массив 

}
//var_dump($mas['login']==$login && $mas['password']==$password);die;

    if($mas['login']==$login && md5($mas['password']==$password)){

        $_SESSION['user'] = [
            'full_name' => $mas['full_name']
        ];
        
       return header('Location: ../profil.php');
  //  return;
    
}
$_SESSION['msg'] = " Erorr data ";
    header('Location: ../index.php');
?>