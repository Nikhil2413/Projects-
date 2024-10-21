<?php
          $username = "root";
          $servername = "localhost";
          $password = "Nikhil@123";
          $con = new mysqli($servername,$username,$password);

          if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
          }
          
?>