<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to experience more</title>
    
    <style>

        body {
                    background-image: url('login.jpg');
                    background-size: cover; /* This ensures the background image covers the entire screen */
                    background-repeat: no-repeat; /* This prevents the background image from repeating */
            }
        /* Adjust the size of the fieldset */
        fieldset {
            width: 300px; /* Adjust the width */
            height: 250px; /* Adjust the height */
        }

        #fieldset { /*"not a member yet" form*/
            width: 200px; /* Adjust the width */
            height:150px; /* Adjust the height */
            align-content: center;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-form {
            float: left;
            width: 50%;
        }

        .signup-form {
            float: right;
            width: 50%;
        }


        .Header{

            width: 100%;
            height: 200px;
            background-color: #E9F4F9;
            padding: 20px;
            margin: 0;
            display: flex;
            justify-content: space-between; /* Align items to the end */
            align-items: flex-end; /* Align items to the end */

            }

            .Header img{

            height: 150px;
            margin-bottom: 50px; /* Add margin at the bottom */
            margin-top: 10px; /* Add margin on the right */
            }



            .Header ul {
            list-style-type: none;
            width: 100%;
            text-align: center;

            }

            .Header a {
            text-decoration: none;
            color: black;
            }

            .Header li{

            display: inline-block; /* Display the list items horizontally */
            padding: 10px 20px;
            border-right: 2px solid black; /* Add a border on the right of each list item */
            }


            .Header li:last-child {
            border-right: none; /* Remove the border on the last list item */
            }
    </style>

<link rel="stylesheet" href="footerStyle.css"> 
</head>

<body>
        <div>
        <div class = "Header">

<img src = "LOGO.png">

<ul>
    <td><li><a href = "homepage.php">Home</a></li></td>
    <td><li><a href = "#">Bundle Packages</a></li></td>
    <td><li><a href = "#">Payments</a></li></td>
    <td><li><a href = "help.html">Help</a></li></td>
</ul>

</div>

            
<br>

<div>
<center>
<form class="login-form" method="post" onsubmit="return validateForm()" action="userLogin.php">
    <fieldset style="background-color:darkgray;" >
        <center>
        <h2>Login</h2>
        <input type="text"  placeholder="Username/Email" name="username" id="username"><br><br>
        <input type="password" placeholder="Password" name="password" id="password"><br><br>
        </center>
        <a href="#">Forgot password</a><br><br><br>
        <center><input type="checkbox">Remember me &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;     
        <input type="submit" class="button" onclick="showAlert()" value="Log in"></center>  
        
      
        
        <script>
            function validateForm() {
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                return true;

            }

        </script>
        
    </fieldset>
</form><br><br>

<form class="signup-form" action="websitesignup.php" >
    <fieldset id="fieldset" style="background-color:LightBlue;" >
        <center>
        <h2>Not a member yet?</h2><br>  
        <a href="websitesignup.php"> 
        <input type="submit" class="button" value="Join"></a></center>   
    </fieldset>
</form>
</center>

</div>
<div>
        
        <footer>

<br><br>
        <h4><a href="help.html">Help</a></h4>
        <h4><a href="Admin Login.php">Admin Login</a></h4>
    
    <div class="footer-bottom">
      <p>&copy; 2024 Company Name. All rights reserved.</p>
      <p><a href="privacy policy.html">Privacy Policy</a> <a href="terms2.html">Terms & Conditions</a></p>
    </div>
  </footer>
</div>
</div>
</body>
</html>










