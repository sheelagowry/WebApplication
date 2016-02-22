<?php
require_once "config.php";
include "header.php";
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error)
  die("Connection to database failed:" .
    $conn->connect_error);
$conn->query("set names utf8"); 
?>
<a href="index.php">Back to product listing</a>
    <p>
     


      <?php 
      $conn = new mysqli("localhost", "test", "t3st3r123", "test");
      $statement = $conn->prepare("SELECT name,description,price FROM Sheela_Products WHERE id = ?");
      $statement->bind_param("i", $_GET["id"]);
      $statement->execute();
      $results = $statement->get_result();
      $row = $results->fetch_assoc();
      ?>

      <span style ="float:right;"><?=$row["price"];?>EUR</span>
      <h1><?=$row["name"];?></h1>

      <p>
        <?=$row["description"];?>
      </p>

<? include "footer.php" ?>

