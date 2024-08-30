<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csspackage (1).css">
    <title>FlyFlex - Packages</title>
</head>
<body>

<div class = "Header">

<img src = "LOGO.png">

<ul>
<td><li><a href = "homepage.php">Home</a></li></td>
            <td><li><a href = "packages.php">Bundle Packages</a></li></td>
            <td><li><a href = "bookingPage.php">Booking</a></li></td>
            <td><li><a href = "payment-portal.php">Payments</a></li></td>
            <td><li><a href = "help.html">Help</a></li></td>
</ul>

</div>
    <br><br>

<form action="" method="post">
<div class="pics">
    <div class="Bali">
        <img src="bali.jpg" alt="Bali" class="img1">
        <h1 class="Bali"><a href="https://en.wikipedia.org/wiki/Bali" class="font">Bali</a><br><h2 class="Bali">$1500</h2></h1>
        
        <input type="button" value="Add to wishlist ♥" class="atw" onclick="showAlert1()" name="Bali">
    </div>
    
    <div class="Phuket">
        <img src="phuket.jpg" alt="Phuket" class="img2">
        <h1 class="Phuket"><a href="https://en.wikipedia.org/wiki/Phuket" class="font">Phuket</a> <br><h2 class="Phuket">$1350</h2></h1>
        <input type="button" value="Add to wishlist ♥" class="atw" onclick="showAlert2()" name="Phuket">
    </div>
    
    <div class="Delhi">
        <img src="delhi.jpg" alt="Delhi" class="img3">
        <h1 class="Delhi"><a href="https://en.wikipedia.org/wiki/Delhi" class="font">Delhi</a> <br><h2 class="Delhi">$1200</h2></h1>
        <input type="button" value="Add to wishlist ♥" class="atw" onclick="showAlert3()" name="Delhi">
    </div>
    
    <div class="Male">
        <img src="male.jpg" alt="Male" class="img4">
        <h1 class="Male"><a href="https://en.wikipedia.org/wiki/Mal%C3%A9" class="font">Male</a> <br><h2 class="Male">$1650</h2></h1>
        <input type="button" value="Add to wishlist ♥" class="atw" onclick="showAlert4()" name="Male">
    </div>
    </div>
    </form>
    
 <script>
    function showAlert1() {
        alert("Added to wishlist");
    }
    function showAlert2() {
        alert("Added to wishlist");
    }
    function showAlert3() {
        alert("Added to wishlist");
    }
    function showAlert4() {
        alert("Added to wishlist");
    }

 </script>
    

    
    
    
    <footer>
    <style>
        .footer-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 20px 0; 
    border-top: 1px solid #e9e9e9;
  }
  .footer-border {
    border-style: solid;

  }

  .footer-centr {
    align-content: center;

  }
  
  .footer-col {
    flex-basis: 25%;
    padding: 10px;
  }
  
  .footer-col h4 {
    margin-bottom: 5px;
    font-size: 16px;
  }
  
  .footer-col p {
    font-size: 14px;
    line-height: 1.5;
  }
  

  .footer-col form {
    display: flex;
    flex-direction: column;
    align-items: center;
  }



  .footer-bottom {
    text-align: center;
    padding: 10px 0;
    background-color: #f2f2f2;
  }
  
  .footer-bottom a {
    color: #333;
    text-decoration: none;
    margin: 0 5px;
  }
  
    </style>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
        <div class="footer-container" style="background-color:aliceblue;">
              <div class="footer-col">
                <h4>About Us</h4>
                <a href="aboutUs.html">Who we are</a>
              </div>
              <div class="footer-col">
                <h4>Support</h4>
                <a href="help.html">FAQ</a>
              </div>
              <div class="footer-col">
                <h4>Contact Us</h4>
                <a href="#">For general inquiries</a>
        
              </div>
              
              <div class="footer-col">
                <h4><a href="feedback.php">Feedback</a></h4>
                <br>
                <br>
                <center>
                  <h4>Subscribe to our newsletter !</h4>
                  
                    <fieldset align-content:center;>
                      <form class="footer-col" method="post"></form>
                    <input type="text" id="name" name="name" placeholder="Your Name">
                    <br>
                    
                    <br>
                    <input type="email" id="email" name="email" placeholder="Your Email"><br>
                    <br> <button style="text-align:left;" type="submit">Subscribe</button>
        
                  
        
                  </form>
                </fieldset> 
                  <br>
                </center>
              </div>
        
              <div class="footer-col">
                <h4><a href="adminLogin.php">Admin Login</a></h4>
              </div>
        
              <div class="footer-col">
                <h4><a href="serviceProvider.php">Service Provider Login</a></h4>
              </div>
        
              <div class="footer-col">
                <h4>Email</h4>
              </div>
            </div>
            <div class="footer-bottom">
              <p>&copy; 2024 Company Name. All rights reserved.</p>
              <p><a href="privacy policy.html">Privacy Policy</a> <a href="terms2.html">Terms & Conditions</a></p>
            </div>
          </footer>
        
        </div>

    
</body>
</html>