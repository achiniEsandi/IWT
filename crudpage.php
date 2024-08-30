<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csspackage.css">
    <title>Document</title>
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

<br>
<div class="container">
        <button class="btn"><a href="websitesignup.php" class="text-light">Add User</a></button>
    </div><br>

    <table class="table" border="1" >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Full name</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Gender</th>
                <th scope="col">Email Address</th>
                <th scope="col">Country</th>
                <th scope="col">Address</th>
                <th scope="col">postalCode</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Re-enter Password</th>
            </tr>
        </thead>
    

    <?php

    include 'config.php';


    $sql1 = " SELECT * FROM data " ;

    $result = mysqli_query($con,$sql1);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) 

        {
            $id = $row['ID'];
            $title1 = $row["Title"];
            $fullname1 = $row["Full name"];
            $dob1 = $row['Date of Birth'];
            $Gender1 = $row['Gender'];
            $email1 = $row['Email address'];
            $country1 = $row['Country'];
            $adress1 = $row['Adress'];
            $postalcode1 = $row['Postal code'];
            $username1 = $row['Username'];
            $password1 = $row['Enter Password'];
            $repassword1 = $row['Re-enter Password'];

            echo'
            <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$title1.'</td>
            <td>'.$fullname1.'</td>
            <td>'.$dob1.'</td>
            <td>'.$Gender1.'</td>
            <td>'.$email1.'</td>
            <td>'.$country1.'</td>
            <td>'.$adress1.'</td>
            <td>'.$postalcode1.'</td>
            <td>'.$username1.'</td>
            <td>'.$password1.'</td>
            <td>'.$repassword1.'</td>
            <td>
            <button class="buttonD"><a href="Update.php?updateid='.$id.' ">Update</a></button>
            <button class="buttonU"><a href="delete.php?deleteid='.$id.' ">Delete</a></button>

            </tr>';
            
                

        }

    }
    ?>
</table>


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