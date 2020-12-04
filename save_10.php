<?php
session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost; dbname=lesson_9", "root", "root");
$sql = "SELECT * FROM form WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);
//var_dump($task); die;

if(!empty($task)){
    $message = "Введенная запись уже присутствует в таблице.";
    $_SESSION['danger'] = $message;
//    var_dump($_SESSION);

    header("Location: task_10.php");
    exit;
}


$sql = "INSERT INTO form (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

$message = "Запись добавлена.";
$_SESSION['success'] = $message;




header("Location: task_10.php");
