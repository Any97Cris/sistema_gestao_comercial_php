<?php

include './conexao_db/db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$business = $_POST['business'];

$sql = "UPDATE `agenda` SET `name`='{$name}', `mail` = '{$email}', `telephone` = '{$telephone}', `business` = '{$business}' WHERE id =$id";
$insert = mysqli_query($conexao, $sql);

header('Location: list_contact.php?msg=1');