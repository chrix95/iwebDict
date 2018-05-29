<?php

  include 'database/connection.php';

  $datapost = file_get_contents("php://input");

  if (isset($datapost) || !empty($datapost)) {
    $request = json_decode($datapost);

    $all = $request->all;
    $religion = $request->religion;
    $family = $request->family;
    $market = $request->market;
    $relationship = $request->relationship;
    $kitchen = $request->kitchen;
    $animal = $request->animal;

    if ($all) {
      $retrieve = $conn->prepare("SELECT * FROM contents");
      $retrieve->execute();

      $result = $retrieve->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($result);

    } elseif ($religion) {
      $religion = 'religion';
      $retrieve = $conn->prepare("SELECT * FROM contents WHERE category=:category");
      $retrieve->bindParam(":category", $religion);
      $retrieve->execute();

      $result = $retrieve->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($result);

    } elseif ($family) {
      $family = 'family';
      $retrieve = $conn->prepare("SELECT * FROM contents WHERE category=:category");
      $retrieve->bindParam(":category", $family);
      $retrieve->execute();

      $result = $retrieve->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($result);

    } elseif ($market) {
      $market = 'market';
      $retrieve = $conn->prepare("SELECT * FROM contents WHERE category=:category");
      $retrieve->bindParam(":category", $market);
      $retrieve->execute();

      $result = $retrieve->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($result);

    } elseif ($relationship) {
      $relationship = 'relationship';
      $retrieve = $conn->prepare("SELECT * FROM contents WHERE category=:category");
      $retrieve->bindParam(":category", $relationship);
      $retrieve->execute();

      $result = $retrieve->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($result);

    } elseif ($kitchen) {
      $kitchen = 'kitchen';
      $retrieve = $conn->prepare("SELECT * FROM contents WHERE category=:category");
      $retrieve->bindParam(":category", $kitchen);
      $retrieve->execute();

      $result = $retrieve->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($result);

    } elseif ($animal) {
      $animal = 'animal';
      $retrieve = $conn->prepare("SELECT * FROM contents WHERE category=:category");
      $retrieve->bindParam(":category", $animal);
      $retrieve->execute();

      $result = $retrieve->fetchAll(PDO::FETCH_OBJ);
      echo json_encode($result);

    }

  }

 ?>
