<?php

include './conexao_db/db.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$empresa = $_POST['empresa'];

$sql = "INSERT INTO agenda(name, mail, telephone, business) values ('$nome', '$email', '$telefone', '$empresa')";

$insert = mysqli_query($conexao, $sql);

header('Location: form_contact.php?msg=1');