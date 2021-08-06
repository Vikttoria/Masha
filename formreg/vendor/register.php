<?php
session_start();
$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];

if( $password == $password_confirm) {
$a=[
    'login' => $login, 
  'password' => md5($password), 
    'full_name' => $full_name,
    'email' => $email
];
$file=fopen("bd.txt","r+");
echo fwrite($file,serialize($a));

//file_put_contents('bd.txt',serialize($a));//file_put_contents-кладем данные в файл bd;serialize($a)-сохраняем все,что в массиве а
$_SESSION['msg'] = " register ok ";
    header('Location: ../index.php');
}else{
    $_SESSION['msg'] = " Erorr pasword ";
    header('Location: ../register.php');
}
?>