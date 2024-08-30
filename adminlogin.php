<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyFlex</title>
    
      <style>
       

        body, html {
            
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        fieldset{

            text-align : center;
            margin : 0 auto;
            width : 300px;
            height : 300px;
            padding : 20px;
    
        }

        .submit{

            float : center;
            width : 100px;
            height : 40px;
        }

        .Remember{

            float : left;
        }

        a{

            float : right;
    
        }
    </style>

</head>
<body>


    <form method="post" action="login[1].php">
        <fieldset>
            <legend>Admin Log-in</legend>
            <label for ="userName" >User Name : </label><br><br>
            <input type = "text" id = "userName" name="userName"><br><br>
            <label for ="password">Password : </label><br><br>
            <input type = "password" id = "password" name="password"><br><br>
            <a href = "#">Forgot Password</a><br><br>
            <input type = "checkbox" class = "Remember" name="Remember"><label class = "Remember">Remember Me</label><br><br>
            <input class = "submit" type = "submit" name="submit" value = "Login">
        </fieldset><br>

    </form>


</body>
<html>