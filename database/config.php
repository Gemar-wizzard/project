 <?php

              $host    = "localhost";
              $user    = "root";
              $pass    = "";
              $db_name = "eletricbilling";

              //create connection
              $connection = mysqli_connect($host, $user, $pass, $db_name);

              //test if connection failed
             if ($connection-> connect_error) {

               die("Connection failed: " . $connection->connect_error);
             }
?>