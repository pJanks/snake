<?php
  require_once 'config.php';

  $date = new DateTime();
  $formattedDate = $date->format('m.d.y h:i:s A');

  try {
    $sql = 'CREATE TABLE scores (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      score INT(20) UNSIGNED,
      name VARCHAR(255) NOT NULL,
      time VARCHAR(30) NOT NULL,
      pills_eaten INT(20) UNSIGNED,
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )';
  
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $successMessage = "$formattedDate scores table created\n";
    file_put_contents('logs/log.log', $successMessage, FILE_APPEND);
    echo json_encode(['message' => $successMessage], JSON_PRETTY_PRINT);
    unset($stmt);
    unset($pdo);
  } catch(PDOException $e) {
    $errorMessage = $formattedDate . ' ERROR scores TABLE WASN\'T CREATED. ' . $e->getMessage() . ' line: ' . $e->getLine() . "\n";
    file_put_contents('logs/error.log', $errorMessage, FILE_APPEND);
    echo '<h1 style="color: #F00; font-size: 240%; font-weight: bold;">ERROR</h1>';
  }