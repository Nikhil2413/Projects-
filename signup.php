<?php
          session_start();
          include "db.php";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $firstname = $_POST['fname'];
                    $lastname = $_POST['lname'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $con_pass = $_POST['confirm'];
                    if ($pass === $con_pass) {
                              if (!empty($email) && !empty($pass) && !is_numeric($email)) {
                                        $query = "insert into signup (First_name, Last_name, Email, Password, Confirm_pass) values ('$firstname', '$lastname', '$email', '$pass', '$con_pass')";
          
                                        mysqli_query($connect, $query);
                                        header("location: index.php");
                                        die;
                                        
                                        
                              }else{
                                        echo "<script type='text/javascript'> alert('Password Not Match')</script>";
                              }
                    }else{
                              
                    echo "<script type='text/javascript'> alert('Password Not Match')</script>";
                    }

          } 
?>

<html>
<head>
          <title>SIGNUP</title>
          <link rel="stylesheet" href="signup.css">
</head>
<body>
<div class="SignUp">
          
          <h2>SignUp Here !</h2>
          <form method="post"> 
          <label>First Name</label><br>
          <input type="text" name="fname" placeholder="First Name" required>
          
          <label>Last Name</label><br>
          <input type="text" name="lname" placeholder="Last Name" required>

          <label>Email : </label><br>
          <input type="email" name="email" placeholder="Email id" required>
          <label>Password : </label><br>
          <input type="password" name="pass" placeholder="Create Password" required>
          <label>Confirm Password : </label><br>
          <input type="password" name="confirm" placeholder="Confirm Password" required><br>
          <input type="submit" value="SUBMIT" name="submit" class="submit">          
          </form>   
          <p>
                    By clicking the Submit button you agree to our<br>
                    <a href="#">Terms and Conditions</a>
          </p>
</div>
          <p class="para2">Already a have an account ? 
                    <a href="login.php">Login in</a>
          </p>
          <img src="images/bwink_tsp_06_single_01.png" alt="logo">
</body>
</html>