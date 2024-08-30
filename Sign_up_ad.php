<!DOCTYPE html>
<html lang="en">


<head>


    <!--Add a title and a logo for the web page-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    

    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body{
    display: flex;
    justify-content: center;
    min-height: 100vh;
    align-items: center;
 
 }
 
.create{
    width: 100%;
    max-width: 650px;
    background: rgba(0,0,0,5);
    opacity: 0.8;
    padding: 28px;
    margin: 0 28px;
    border-radius: 10px;
}

.title{
    font-size: 26px;
    font-weight: 600;
    text-align: center;
    padding-bottom: 6px;
    color: rgb(241, 104, 18);
    text-shadow: 2px 2px 2px black;
    border-bottom: solid 1px white;
}

.user-info{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
}

.user-input-box:nth-child(2n){
    justify-content: end;
}

.user-input-box{
    display: flex;
    flex-wrap: wrap;
    width: 50%;
    padding-bottom: 15px;
}

.user-input-box label{
    width: 95%;
    color: black;
    font-size: 20px;
    font-weight: 400;
    margin: 5px 0;
}

.user-input-box input{
    height: 40px;
    width: 95%;
    border-radius: 7px;
    outline: none;
    border: 1px solid grey;
    padding: 0 10px;
}

.gender-title{
    color:white;
    font-size: 24px;
    font-weight: 600;
    border-bottom: 1px solid white;
}

.gender-category{
    margin: 15px 0;
    color: white;
}

.gender-category label{
    padding: 0 20px 0 5px;
}

.gender-category label,
.gender-category input,
.form-submit-btn input{
    cursor: pointer;
}

.form-submit-btn{
    margin-top: 40px;
}

.form-submit-btn input{
    display: block;
    width: 100%;
    margin-top: 10px;
    font-size: 20px;
    padding: 10px;
    border:none;
    border-radius: 3px;
    color: rgb(0, 0, 0);
    background: rgba(180, 201, 185, 0.7);
    font-weight: bold;
}

.form-submit-btn input:hover{
    background: rgba(128, 136, 130, 0.7);
    color: rgb(255, 255, 255);
}
    </style>
   
</head>
   
    <body class="bgcreate">
        <div class="create">
          <h1 class="title">Registration</h1>
          <form method = "post" action = "../Airline system/adregister.php" onsubmit = "return validateForm()">
            <div class="user-info">
              <div class="user-input-box">
                <label for="fullname">First Name</label>
                <input type="text"
                        id="fullname"
                        name="fullname"
                        placeholder="Enter First Name"/>
              </div>
              <div class="user-input-box">
                <label for="username">Username</label>
                <input type="text"
                        id="username"
                        name="username"
                        placeholder="Enter Last Name"/>
              </div>

            <div class="user-info">
                <div class="user-input-box">
                    <label for="phone_number">Phone Number</label>
                    <input type="text"
                        id="phone_number"
                        name="phone_number"
                        placeholder="Enter Phone Number"
                        pattern="[0-9]{10}"/>
                </div>
            
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email"
                        id="email"
                        name="email"
                        placeholder="Enter Email"/>
                </div>
            </div>
            <div  class="user-info">
              <div class="user-input-box">
                <label for="passw">Password</label>
                <input type="password"
                        id="passw"
                        name="passw"
                        placeholder="Enter Password"/>
              </div>
              <div class="user-input-box">
                <label for="confirmPassw">Confirm Password</label>
                <input type="password"
                        id="confirmPassw"
                        name="confirmPassw"
                        placeholder="Confirm Password"/>
              </div>
            </div>
            <div class="form-submit-btn">
              <input type="submit" value="Register">
            </div>
          </form>
        </div>
        <script>
            function validateForm() {
                var passw = document.getElementById("passw").value;
                var confirmPassw = document.getElementById("confirmPassw").value;
                var phone_number = document.getElementById("phone_number").value; // Corrected the ID
        
                if (passw !== confirmPassw) {
                    alert("Passwords do not match");
                    return false;
                }
                
                var phoneRegex = /^[0-9\- ]+$/;
                if (!phone_number.match(phoneRegex)) { // Corrected the variable name
                    alert("Phone number must contain only numbers, spaces, or dashes");
                    return false;
                }
        
                return true;
            }
        </script>
    </body>
</html>