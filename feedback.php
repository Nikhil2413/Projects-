<?php
          session_start();
          include("db.php");

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $Message = $_POST['Message'];

                    if (!empty($email) && !is_numeric($email)) {
                              $query = "insert into feedback (Name, Email, Message) values ('$name', '$email', '$Message')";

                              mysqli_query($connect, $query);
                              echo "<script type='text/javascript'> alert('Your Feedback is Saved')</script>";
                              
                              
                    }else{
                              echo "<script type='text/javascript'> alert('Enter Vaild Information !')</script>";
                    }

          }
?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="feedback.css">
          <title>FeedBack</title>
</head>
<body>
          <h2>FeedBack</h2>
          <form method="post"> 
          <label>Name:</label><br>
          <input type="text" name="name" placeholder="Name" required>
          <label>Email: </label><br>
          <input type="email" name="email" placeholder="Email id" required>
          <label>Message: </label><br>
          <input type="text" name="Message" placeholder="Whats your opnion to our website" required>
          <input type="submit" value="SUBMIT" name="submit" class="submit">          
          </form>
</body>
</html>