<?php

include './PDO.php';

$conn = getConnection();

$sql = "SELECT FROM * cadastro WHERE";
$stmt = $conn ->prepare($sql);
$stmt ->bindValue($stmt, $sql);
$stmt ->execute();

$result = $stmt->fetchAll();

foreach ($result as $value){
    echo 'email: '.$value['email'].'<br>';
}
