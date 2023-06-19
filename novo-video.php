<?php

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$sql = 'INSERT INTO videos (url, title) VALUES (?,?)';


$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);

if ($url === false) {
    header('Location: /index.php?sucesso=0');
    exit();
}

$titulo = $_POST['titulo'];

$statement = $pdo->prepare($sql);
$statement->bindValue(1, $url);
$statement->bindValue(2, $titulo);

if ($statement->execute() === false) {
    header('Location: /index.php?sucesso=0');
} else {
    header('Location: /index.php?sucesso=1');
}