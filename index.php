<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to experience more</title>
    <style>
        /* Adjust the size of the fieldset */
        fieldset {
            width: 300px; /* Adjust the width */
            height: 250px; /* Adjust the height */
        }

        #fieldset { /*not a member yet form*/
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


    </style>
</head>

<body>
        
<center>
<form class="login-form" method="post" action="insert.php">
    <fieldset>
        <center>
        <h2>Login</h2>
        <input type="text"  placeholder="Username/Email" name="username"><br><br>
        <input type="password" placeholder="Password" name="pwd"><br><br>
        </center>
        <p class=""><u>Forgot password</u></p><br>
        <center><input type="checkbox">Remember me &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;     
        <input type="submit" class="button" onclick="showAlert()" value="Log in"></center>  
        
        <script>
            function showAlert(){
                alert("Submission successful");
            }
        </script>
    </fieldset>
</form>

</body>
</html>