<?php
          include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>WELCOME</title>
          <link rel="stylesheet" href="style.css">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
          
</head>
<body>
          <section class="section">
                    <div class="slider">
                              <div class="slide">
                                        <input type="radio" name="radio-btn" id="radio1">
                                        <input type="radio" name="radio-btn" id="radio2">
                                        <input type="radio" name="radio-btn" id="radio3">
                                        <input type="radio" name="radio-btn" id="radio4">
          
                                        <div class="st image1">
                                                  <img src="images/supply-chain-representation-still-life.jpg" alt="">
                                        </div>
                                        <div class="st image2">
                                                  <img src="images/supply-chain-representation-with-van-top-view.jpg" alt="">
                                        </div>
                                        <div class="st image3">
                                                  <img src="images/vehicles-boxes-supply-chain-representation.jpg" alt="">
                                        </div>
                                        <div class="st image4">
                                                  <img src="images/high-angle-forklift-blue-background.jpg" alt="">
                                        </div>
          
                                        <div class="nav-auto">
                                                  <div class="a-b1"></div>
                                                  <div class="a-b2"></div>
                                                  <div class="a-b3"></div>
                                                  <div class="a-b4"></div>
                                        </div>
                              </div>
                              <div class="nav m">
                                        <label for="radio1" class="m-btn"></label>
                                        <label for="radio2" class="m-btn"></label>
                                        <label for="radio3" class="m-btn"></label>
                                        <label for="radio4" class="m-btn"></label>
                              </div>
                    </div>
          </section>
          <div class="navbar">
                    <a href="index.php"><h1>SHIPSONIC</h1></a>
                              <ul>
                                        <li><a class="active" href="index.php"><i class="fa solid fa-house-chimney"></i> Home </i> </a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Our services <i class="fas fa-caret-down"></i></a>
                                        <div class="sub-menu">
                                                  <ul>
                                                            <li>
                                                                      <a href="Book.php">Express Parcels </a>
                                                                      <a href="Book.php">International Shipment </a><br>

                                                                      <a href="Book.php">E-commerce Logistics </a>
                                                            </li>
                                                  </ul>
                                        </div>
                                        </li>
                                        <li><a href="feedback.php">Feedback</a></li>
                              </ul>
          </div>
          
          
          <div class="Book_Ship">
                    <div class="B1">Book Your Shipment</div>
                    <a href="Book.php"><input type="submit" value="Book Now" id="login"></a>
          </div>
          <div class="Track_Ship">
                    <div class="B2">Track Your Shipment</div>
                    <a href="Track2.php"><input type="submit" value="Track Here" id="Track"></a>
          </div>
          <div class="Store_Ship">
                    <div class="B3">Store Locator</div>
                    <a href="#"><input type="submit" value="Start Search" id="Store"></a>
          </div>
          
<script type="text/javascript">
          var counter = 1;
          setInterval(function(){
                    document.getElementById('radio' + counter).checked=true;
                    counter++;

                    if (counter > 4) {
                              counter = 1;
                    }
          },3000);
</script>
</body>
</html>