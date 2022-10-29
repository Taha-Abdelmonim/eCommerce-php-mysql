<?php
  include 'connect.php';

  $stmt = $con->prepare("SELECT * FROM users WHERE GroupID != 1 ORDER BY UserID");

			// Execute The Statement

			$stmt->execute();

			// Assign To Variable 

			$rows = $stmt->fetchAll();
      header('Access-Control-Allow-Origin: *');
      header("Content-Type: application/json");
			echo json_encode($rows);
      exit();
?>