<?php

include_once ("PDO.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$opcao = $_POST['opcao'];
$message = $_POST ['message'];

$PDO = getConnection();
$result_cadastro = "INSERT INTO cadastro (email, idade, cidade,sexo,comentario) VALUES ('$email', '$idade','$cidade','$opcao','$message')";

$stmt = $PDO->prepare($result_cadastro);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':idade', $idade);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':sexo', $sexo);
$stmt->bindParam(':comentario', $comentario);

  
if ($stmt->execute())
{
    header('Location: sugestoes.php');
    echo ("Sua sugestão foi inserida em nosso banco de dados!");
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}