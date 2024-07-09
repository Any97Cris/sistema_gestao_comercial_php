<?php

include './conexao_db/db.php';

$id = $_POST['id'];


$sql = "DELETE FROM agenda WHERE id = $id";
$delete = mysqli_query($conexao, $sql);

header('Location: list_contact.php?msg=0');