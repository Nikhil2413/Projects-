<?php
          include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Track_Ship</title>
          <link rel="stylesheet" href="Bookings.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
          <h1>Bookings</h1>
          <div class="wrap">
          <div class="sidebar">
                    
                    <ul>
                              <li ><a href="Book.php" ><i class="fa solid fa-house-chimney"></i>Home
                              </a></li>
                              <li ><a href="Track2.php"><i class="fa solid fa-truck-fast"></i>Track Shipment</a></li>
                              <li><a href="index.php"><i class="fa solid fa-book"></i>Services</a></li>
                              <li style="background-color: #F5E8C7;" ><a href=""><i class="fa regular fa-file"></i>Bookings</a></li>
                    </ul>
                    <div class="social">
                              <a href="#"><i class="fa-brands fa-facebook"></i></a>
                              <a href="#"><i class="fa-brands fa-instagram"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    <div class="main_content">
                              <div class="header">Your Bookings</div>
                    </div>
                    <form method="post">
                    
                              Enter Email :<br><br>
                              <input type="email" name="book_email" placeholder="Enter Email" required><br><br>
                              <input type="submit" name="submit" value="SHOW" id="submit">
                    
                    </form>
                    <div class="continar">
                              <table>
                              <?php
                                        if (isset($_POST['submit'])) {
                                                  $email = $_POST['book_email'];
                                                  $query = "SELECT * from `book` where Email='$email'";
                                                  $result = mysqli_query($connect, $query);

                                                  if ($result) {
                                                           if (mysqli_num_rows($result)>0) {
                                                                      echo '<thead>
                                                                                <tr>
                                                                                <th>Id</th>
                                                                                <th>Name</th>
                                                                                <th>Email</th>
                                                                                <th>Delivery</th>
                                                                                <th>Value</th>
                                                                                <th>Content</th>
                                                                                <th>Quantity</th>
                                                                                </tr>
                                                                                </thead>';
                                                                                while($row = mysqli_fetch_assoc($result)){
                                                                                echo "<tbody>
                                                                                <tr>
                                                                                <td>$row[id]</td>
                                                                                <td>$row[Name]</td>
                                                                                <td>$row[Email]</td>
                                                                                <td>$row[Delivery]</td>
                                                                                <td>$row[Value]</td>
                                                                                <td>$row[content]</td>
                                                                                <td>$row[quantity]</td>
                                                                                </tr>
                                                                                </tbody>";
                                                                                }

                                                           }else{
                                                                      echo "<h2 class='not'> Booking Not Found </h2>";
                                                           }
                                                  }
                                        }
                              ?>
                              
                              </table>
                    </div>
                   
</body>
</html>