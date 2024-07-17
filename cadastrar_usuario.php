<?php

session_start();

include './conexao_db/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO usuario(mail, password) VALUES('$email','$password')";
$insert = mysqli_query($conexao, $sql);

if($password == $password){
    $_SESSION['mailx'] = $email;
    header('Location: index.php');
}else {
    header('Location: sign.php?msg=1');
}