<?php

try {

  // declare variables
  $host="localhost";

  $user="root";

  $password="";

  $dbname = "iwebdict";

  // PDO conection

  $conn = new PDO("mysql:dbname=$dbname; host=$host", $user, $password);

  // check if conection is established

  if($conn)
  {
    // echo "Connected";
  }


} catch (Exception $e) {

  echo "Problem Occured". $e->message();

}

?>
