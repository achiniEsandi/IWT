<!DOCTYPE html>
<html lang="en">
<head>
    <!--Add a title and a logo for the web page-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel = "shourtcut icon" href = "../Pictures/DRP logo.jpg" type = "image/x-icon">
    <style>
*{ 
    margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: "poppings", sans-serif;
}


body{
   display: flex;
   justify-content: center;
   min-height: 100vh;
   align-items: center;

}
   

.form-cont{
   width: 450px;
   background: rgb(0, 0, 0);
   color: rgb(255, 255, 255); /* white */
   opacity: 0.7;

   border-radius: 12px;
   padding: 30px 40px;
}

.form-cont h1{
   font-size: 36px;
   text-align: center;
}

.form-cont .txtbox{
   position: relative;
   width: 100%;
   height: 50px;
   margin: 30px 0;
}

.txtbox input{
   width: 100%;
   height: 100%;
   background: transparent;
   border: none;
   outline: none;
   border: 2px solid rgba(255,255,255, .2);
   border-radius: 40px;
   font-size: 16px;
   color: white;
   padding: 20px 45px 20px 20px;
}

.txtbox input::placeholder{
   color: white;
}

.txtbox i{
   position: absolute;
   right: 50px;
   top: 30%;
   transform: translate(-50%);
   font-size: 20px;
}

.form-cont .remember{
   display: flex;
   justify-content: space-between;
   font-size: 14.5px;
   margin: -15px 0 15px;
}

.remember label input{
   accent-color: white;
   margin-right: 3px;
}

.remember a{
   color: white;
   text-decoration: none;
}

.remember a:hover{
   text-decoration: underline;
}

.form-cont .button{
   width: 100%;
   height: 45px;
   background: white;
   border: none;
   outline: none;
   border-radius: 40px;
   box-shadow: 0 0 10px rgba(0, 0, 0, .1);
   cursor: pointer;
   font-size: 16px;
   color: #333;
   font-weight: 600;
}

.form-cont .registration{
   font-size: 14.5px;
   text-align: center;
   margin: 20px 0 15px;
}

.registration p a{
   color: white;
   text-decoration: none;
   font-weight: 600;
}

.registration p a:hover{
   text-decoration: underline;
}
    </style>
</head>

<div>
<body class="bglog">
    
    <div class="form-cont">
        <form method = "post" action = "../Airline system/login.php">
            <h1>Login</h1>
            <div class="txtbox">
                <input type="text" placeholder="Username" id = "txt1" name = "txt1" required>
                <i class='bx bxs-user'></i>   <!--icons-->

            </div>
            <div class="txtbox">
                <input type="Password" placeholder="Password" id = "psd1" name = "psd1" required>
                <i class='bx bxs-lock'></i>      <!--icons-->
            </div>
            <div class="remember">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password?</a>    
            </div>
            <button type="Submit" class="button">Login</button>
            <div class="registration">
                <p>Don't have an account? <a href="../Airline system/Sign_up_ad.html">Register</a></p>
            </div>
        </form>
    </div>

</body>
</div>

</html>