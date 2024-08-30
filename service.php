<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyFlex</title>
    <link rel="stylesheet" href="serviceProviderLogin.css">
</head>
<body>
    <div class="Login">
        <form method="post" action="insertSPLogin.php">
            <fieldset>
                <legend>Service Provider Log-in</legend>
                <label for="userName">User Name :</label><br><br>
                <input type="text" id="userName" name="username"><br><br>
                <label for="password">Password :</label><br><br>
                <input type="password" id="password" name="password"><br><br>
                <a href="#" id="forgotPW">Forgot Password</a><br><br>
                <input type="checkbox" class="Remember"><label class="Remember">Remember Me</label><br><br>
                <input class="submit" type="submit" value="Login">
            </fieldset><br>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var forgotPW = document.getElementById('forgotPW');
            forgotPW.addEventListener('click', function() {
                alert('You clicked the link!');
            });
        });
    </script>
</body>
</html>
