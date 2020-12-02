<?php
//
//$pdo = new PDO("mysql:host=localhost;dbname=items","root", "");
//$sql = "SELECT * FROM items";
//$statement = $pdo->prepare($sql);
//$statement->execute();
//$items = $statement->fetchAll(PDO::FETCH_ASSOC);
//
//
//?>


<?php

$text = $_POST['text'];
//
//var_dump($post); die;

$pdo = new PDO("mysql:host=localhost; dbname=lesson_9", "root", "root");
$sql = "INSERT INTO form (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);


?>