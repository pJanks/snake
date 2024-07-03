<?php
  try {
    define('SERVER', 'localhost');
    define('USERNAME', 'DB_USER');
    define('PASSWORD', 'DB_PASSWORD');
    define('DB', 'DB_NAME');
    $pdo = new PDO('mysql:host=' . SERVER . ';dbname=' . DB, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    $date = new DateTime();
    $formattedDate = json_encode($date->format('m.d.y h:i:s A'), JSON_PRETTY_PRINT);
    $errorMessage = $formattedDate . ' ERROR: Could not connect to db. ' . $e->getMessage() . ' line: ' . $e->getLine() . "\n";
    file_put_contents('logs/error.log', $errorMessage, FILE_APPEND);
    echo '<h1 style="color: #F00; font-size: 240%; font-weight: bold;">ERR</h1>';
  }