<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csspackage.css">
    <title>FlyFlex - Sign up</title>
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
</div>
    
    <form method="post" action="insert(1).php" id="userForm">
        <fieldset>
        <legend align="center"><strong>Enter User Details</strong></legend>
        <br>
        Title : 
        <select name="Title" id="Title" required>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Mast.">Mast.</option>
            <option value="Miss.">Miss.</option>
            <option value="Rev.">Rev.</option>
        </select><br><br>

        Full name : <input type="text" name="fullname" id="fullname" required><br><br>
        Date of Birth : <input type="date" name="dob" id="dob" required><br><br>
        Gender : 
        <select name="Gender" id="Gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>

        Email address : <input type="email" name="email" id="email" required><br><br>
        </fieldset><br><br>

        <fieldset>
            <legend align="center"><strong>Enter Residency details</strong></legend>
            <br>
        Country : <input type="text" name="country" id="country" required><br><br>
        Address : <input type="text" name="adress" id="adress" required><br><br>
        Postal code : <input type="text" name="postalcode" id="postalcode" required><br><br>
        </fieldset><br><br>
    
    <fieldset>
        <legend align="center"><strong>Enter User Credentials</strong></legend>
        <br>
        Username: <input type="text" name="username" id="username" required><br><br>
        Enter Password: <input type="password" name="password" id="password" required><br><br>
        Re-enter Password: <input type="password" name="repassword" id="repassword" required><br><br>
        <input type="checkbox" name="rules" id="rules" required> I understand and accept the terms and conditions
        <br><br>
        
        <input type="submit" value="submit" class="submit">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <input type="reset" value="Reset" class="reset">
        <br><br>
    </fieldset>
</form>  

<script>
    document.getElementById("userForm").addEventListener
    ("submit", function(event) {
        var password = document.getElementById("password").value;
        var repassword = document.getElementById("repassword").value;

        if (password !== repassword) {
            alert("Passwords do not match");
            event.preventDefault(); // Prevent form submission
        }
        }
    );
</script>


    </fieldset>

    
    </form>

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