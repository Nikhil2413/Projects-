
<?php
          session_start();
          include("db.php");

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST['name'];       
                    $email = $_POST['email'];
                    $Pincode = $_POST['Pincode'];
                    $address = $_POST['address'];
                    $delivery = $_POST['delivery'];
                    $Value = $_POST['Value'];
                    $content = $_POST['content'];
                    $quantity = $_POST['quantity'];

                    if (!empty($email) && !empty($address) && !is_numeric($email)) {
                              $query = "insert into book (Name, Email, Pincode, Address, Delivery, Value, content, quantity) values ('$name', '$email', '$Pincode', '$address', '$delivery', '$Value', '$content', '$quantity')";

                              mysqli_query($connect, $query);
                              echo "<script type='text/javascript'> alert('Your Shipment is Booked')</script>";
                              
                              
                    }else{
                              echo "<script type='text/javascript'> alert('Enter Vaild Information !')</script>";
                    }
          }
                    
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <title>Book_Ship</title>
          <link rel="stylesheet" href="Book.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
          <h2>Welcome!!</h2>
         <div class="wrap">
          <div class="sidebar">
                    
                    <ul>
                              <li style="background-color: #F5E8C7;"><a href="Book.php" ><i class="fa solid fa-house-chimney"></i>Home
                              </a></li>
                              <li><a href="Track2.php"><i class="fa solid fa-truck-fast"></i>Track Shipment</a></li>
                              <li><a href="index.php"><i class="fa solid fa-book"></i>Services</a></li>
                              <li><a href=""><a href="Bookings.php"><i class="fa regular fa-file"></i>Bookings</a></li>
                    </ul>
                    <div class="social">
                              <a href="#"><i class="fa-brands fa-facebook"></i></a>
                              <a href="#"><i class="fa-brands fa-instagram"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
          </div>
          <div class="main_content">
                    <div class="header">Book Shipment</div>
                    <div class="info">
                              <form method="post">
                              <label>Name : </label><br>
                              <input type="text" name="name" placeholder="Enter Your Name" required>
                              <label>Email : </label><br>
                              <input type="email" name="email" placeholder="Enter Your Email" required>
                              <label>Pincode : </label><br>
                              <input type="number" name="Pincode" placeholder="Enter delivery pincode" required>
                              <label>Address : </label><br>
                              <input type="text" name="address" placeholder="Enter PickUP Address" required>
                              <label>Delivery Address : </label><br>
                              <input type="text" name="delivery" placeholder="Enter delivery Address" required>
                              <label>Shipment Value : </label><br>
                              <input type="number" name="Value" placeholder="Enter Content Value(Rs)" required>
                              <label>Content : </label><br>
                              <input type="text" name="content" placeholder="Enter Product" required>
                              <label>Quantity : </label><br>
                              <input type="number" name="quantity" placeholder="Enter Quantity of Product" required>
                              <input type="submit" value="SUBMIT" id="submit">
                              </form>   
                    </div>
          </div>
         </div> 
</body>
</html>