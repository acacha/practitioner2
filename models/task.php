<?php

try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=tasks','debian-sys-maint', 'RcGXsSqsnRy6nQn1');
} catch (PDOException $e) {
    die($e->getMessage());
}


$query = $pdo->prepare('SELECT * FROM tasks');

$query->execute();

$results = $query->fetchAll();

$task = $results[0];