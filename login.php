<?php
          session_start();

          include("db.php");

          if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $email = $_POST['email'];
                    $pass = $_POST['pass_login'];

                    if (!empty($email) && !empty($pass) && !is_numeric($email)) {

                              $query = "select * from signup where Email = '$email' limit 1";
                              $result = mysqli_query($connect, $query);

                              if ($result) {
                                        if($result && mysqli_num_rows($result) > 0){
                                                  $data = mysqli_fetch_assoc($result);

                                                  if ($pass == $data['Password']) {
                                                            
                                                            header("location: Book.php");
                                                            die;
                                                            

                                                  }
                                        } 
                              }
                    echo  "<script type='text/javascript'>alert('Email or Password is incorrect')</script>";
                    }
                    else{
                              echo "<script type='text/javascript'>alert('Email or Password is incorrect')</script>";
                    }

          }
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <title>LOGIN</title>
          <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="Login">
          <h2>Login Here !</h2>
          <form method="post">
          <label>Email : </label><br>
          <input type="email" name="email" placeholder="Enter Email id" required>

          <label>Password : </label><br>
          <input type="password" name="pass_login" placeholder="Enter Password" required>
          <input type="submit" value="LOGIN" id="login">
          </form>
          <p><a href="#">Forgot Password ?</a></p>
</div>
          <p class="para">Don't have an account? <a href="signup.php">Sign Up</a></p> 
         
          <img src="images/bwink_ppl_0201.png" alt="logo">
</body>
</html>