
  <?php

    include('database/connection.php');

    if (isset($_POST['searchMain'])) {

      $search = htmlentities(strip_tags(trim($_POST['search'])));

      if ($search == '*') {

        $getAll = $conn->prepare("SELECT * FROM contents ORDER BY `contents`.`english` ASC");
        $getAll->execute();
        $resultArray = array();

        while ($row = $getAll->fetch(PDO::FETCH_OBJ)) {
          $resultArray[] = $row;
          // get all fields
        }

        require('searchresult.php');

      } else {

        $getresult = $conn->prepare("SELECT * FROM contents WHERE english LIKE '$search%' ORDER BY `contents`.`english` ASC");
        // $getresult = $conn->prepare("SELECT * FROM contents WHERE english LIKE '$search%' OR word LIKE '$search%' ORDER BY `contents`.`english` ASC");

        if ($getresult->execute()) {

          $count = $getresult->rowCount();

          if ($count >= 1) {

            $resultArray = array();

            while ($row = $getresult->fetch(PDO::FETCH_OBJ)) {
              $resultArray[] = $row;
              // get all fields
            }

            require ('searchresult.php');

            // echo json_encode($resultArray);

          } else {

            echo "<h4>No result found</h4>";

          }

        }


      }

    }

   ?>
