<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=tasks','debian-sys-maint', 'RcGXsSqsnRy6nQn1');
} catch (PDOException $e) {
    die($e->getMessage());
}

// die(var_dump($pdo));

$query = $pdo->prepare('SELECT * FROM tasks');

$query->execute();

$results = $query->fetchAll();

// die(var_dump($results[0]));
// die(var_dump($results));

$task = $results[0];

// $task = [
//     'name' => 'Comprar llet',
//     'description' => 'Al lidl...',
//     'completed' => false,
// ];
