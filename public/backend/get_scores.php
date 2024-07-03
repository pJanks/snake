<?php
  try {
    require_once dirname(__DIR__) . '/../config.php';
    
    $date = new DateTime();
    $formattedDate = $date->format('m.d.y h:i:s A');

    $sql = 'SELECT * FROM scores ORDER BY score DESC LIMIT 10';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    $scores = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      array_push($scores, $row);
    }

    $successMessage = "$formattedDate retrieved scores\n";
    file_put_contents('logs/log.log', $successMessage, FILE_APPEND);
    echo json_encode($scores, JSON_PRETTY_PRINT);
    unset($stmt);
    unset($pdo);
  } catch(PDOException $e) {
    $errorMessage = $formattedDate . ' ERROR GETTING scores TABLE: ' . $e->getMessage() . ' line: ' . $e->getLine() . "\n";
    file_put_contents('logs/error.log', $errorMessage, FILE_APPEND);
    echo '<h1 style="color: #F00; font-size: 240%; font-weight: bold;">ERROR</h1>';
  }