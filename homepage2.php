<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fly-Flex Home Page</title>
    <style>
       
       body {
            background-image: url('background.jpg');
            background-size: cover; /* This ensures the background image covers the entire screen */
            background-repeat: no-repeat; /* This prevents the background image from repeating */
        }

        .notices {
            width: 500px; /* Adjust the width */
            height: 800px; /* Adjust the height */
       
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        select {
            width: 20%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            resize: vertical; /* Allow textarea to resize */
        }

        .container{

        display : flex;
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
    <td><li><a href = "packages.php">Bundle Packages</a></li></td>
    <td><li><a href = "bookingPage.php">Booking</a></li></td>
    <td><li><a href = "payment-portal.php">Payments</a></li></td>
    <td><li><a href = "help.html">Help</a></li></td>
</ul>
<button class="button"> <a href="login.php">Logout</a></button>
</div>

<hr>  
    
    <br>
<center>
<form method="POST" action="insertH.php">
<select name="start">
    <option value="From" disabled selected>From</option>
    <option value="ATL">Hartsfield-Jackson Atlanta International Airport (ATL)</option>
    <option value="LAX">Los Angeles International Airport (LAX)</option>
    <option value="BIA">Bandaranaike International Airport (BIA)</option>
    <option value="LHR">London Heathrow Airport (LHR)</option>
    <option value="DXB">Dubai International Airport (DXB)</option>
    
</select> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;


<select name="destination">
    <option value="To" disabled selected>To</option>
    <option value="ATL">Hartsfield-Jackson Atlanta International Airport (ATL)</option>
    <option value="LAX">Los Angeles International Airport (LAX)</option>
    <option value="BIA">Bandaranaike International Airport (BIA)</option>
    <option value="LHR">London Heathrow Airport (LHR)</option>
    <option value="DXB">Dubai International Airport (DXB)</option>
    
</select>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 
<input type="checkbox" name="type" value="oneway">One Way &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<input type="checkbox" name="type" value="return">Return &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<input type="checkbox" name="type" value="multi">Multi City <br><br>


<select name="class">
    <option value="Class" disabled selected>Class</option>
    <option value="First">First Class</option>
    <option value="Economy">Economy</option>
    <option value="Business">Business</option>

    
</select> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;



<select name="passengers">
    <option value="Passenger" disabled selected>Passengers</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    
</select> <br><br>

Departure &nbsp;&nbsp;&nbsp;<input type="date" name="dDate"> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

Arrival &nbsp;&nbsp;&nbsp;<input type="date" name="aDate"> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<input type="submit" class="button" value="Search Flight"  onclick="showAlert()">

<script>
                function showAlert()
                {
                    alert("Flights UL-405,UL-406,UL-874 will be available");
                }
            </script>

</center> 
<br>
</form>


<hr>
<br>
<center>
    <form class="notices">
    <fieldset style="background-color:aliceblue;">
    <center><h2>Notices!</h2></center>
    <b>Terminal Update</b><br>
    <p>25-APRIL-24<br>Effective from 5th of May 2024, Flights will be also arrive and depart 
        from Terminal 1 and 2 at Seattle Airport</p> <br>

        <b>Terminal Change</b><br>
    <p>10-APRIL-24<br>Flights will not arrive or depart from Terminal 1 and 2 
        at Seattle Airport due to maintenance</p> <br>

        <b>Flight Delay</b><br>
    <p>8-APRIL-24<br> UL-502 Flight which was scheduled to fly to Australia from Katunayake International Airport
        is scheduled to fly the day after due to heavy thunderstorms</p> <br><br>

</fieldset>
</form>
</center>

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
        <h4><a href="Admin login.php">Admin Login</a></h4>
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


