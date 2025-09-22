<?php

try {
    $pdo = new PDO('sqlite:contacts.db'); //SQLITE FILE
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Error Handling
    $pdo->exec("CREATE TABLE IF NOT EXISTS contacts (
        id INTEGER PRIMARY KEY,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        phone TEXT,
        image TEXT
    );"); //creating table, will always be executed whenever db is connected
    return $pdo;
} catch (PDOException $e) {
    return null;
}
?>