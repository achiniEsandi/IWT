<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyFlex</title>

    <style>

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

        .container{

            display : flex;
            justify-content: space-between;
        }

        .right-section{

            width : 70%;
            padding : 20px;
        }

        .left-section{

            width : 30%;
            padding : 20px;
        }

        fieldset{

            height : auto;
        }

    </style>
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

      <div class = "container">
      <fieldset>
        <div class = "left-section">

            <h2>HI THERE !</h2>
            <p>Prepare for takeoff!</p>
            <p>Your seamless booking experience starts here. Let's turn your travel dreams into reality.</p>

        </div>
      </fieldset>
        <div class = "right-section">

            <form method="post" action="insertbooking.php">
                <fieldset>
                    <legend>Passenger Information.</legend>

                 <label for = "Fname">First Name : </label>
                 <input type = "text" id = "Fname" name = "Fname"><br><br>

                 <label for = "Address">Address : </label>
                 <select id = "Address" name = "Addreess">

                    <option value = "USA">USA</option>
                    <option value = "UK">UK</option>
                    <option value = "Japan">Japan</option>
                    <option value = "USA">India</option>
                    <option value = "Norway">Norway</option>
            
                 </select><br><br>
                 
                 <label for = "Pno">Passport Number : </label>
                 <input type = "text" id = "Pno" name = "Pno"><br><br>

                 <label for = "Country">Country Of Residance : </label>
                 <select id = "Country" name = "Country">

                    <option value = "USA" >USA</option>
                    <option value = "UK" >UK</option>
                    <option value = "Japan" >Japan</option>
                    <option value = "USA" >India</option>
                    <option value = "Norway" >Norway</option>
            
                 </select>
                </fieldset><br><br>

                <fieldset><br>
                    <legend>Flight Information.</legend>
                    <label for = "Departure">Departure :</label>
                    <select id = "Departure" name = "Departure">

                        <option value = "USA">USA</option>
                        <option value = "UK">UK</option>
                        <option value = "Japan">Japan</option>
                        <option value = "USA">India</option>
                        <option value = "Norway">Norway</option>

                    </select><br><br>

                    <label for = "Arrival">Arrival :</label>
                    <select id = "Arrival" name = "Arrival">

                        <option value = "USA">USA</option>
                        <option value = "UK">UK</option>
                        <option value = "Japan">Japan</option>
                        <option value = "India">India</option>
                        <option value = "Norway">Norway</option>

                    </select><br><br>

                    <label for = "departDate">Departing Date : </label>
                    <input type = "date" id = "departDate" name = "departDate"><br><br>

                    <label for = "arrivalDate">Arriving Date : </label>
                    <input type = "date" id = "arrivalDate" name = "arriveDate"><br><br>

                    <label for = "package">Package Type : </label>
                    <input type = "text" id = "package" name = "package"><br><br>

                    <label for = "Food">Food preferance : </label>
                    <select id = "Food" name = "Food">

                        <option value = "Western">Western</option>
                        <option value = "Indian">Indian</option>
                        <option value = "Sri Lankan">Sri Lankan</option>
                        <option value = "Chinese">Chinese</option>

                    </select><br><br>

                    <label for = "special" name="needs">Do you have any special asisstance needs?</label>
                    <input type="radio" id="special" name="yesno" value="Yes"> Yes
                    <input type="radio" id="special" name="yesno" value="No"> No <br><br>
                    <input type="submit" value="Submit">

                </fieldset>

            </form>

        </div>


    </div>
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

    <link rel="foter" href="css/footer.css">
    <div class="footer-container">
      <div class="footer-col">
        <h4>About Us</h4>
        <p><a href="aboutUs.html">Who we are</a></p>
      </div>
      <div class="footer-col">
        <h4>Support</h4>
        <p><a href="help.html">FAQ</a></p>
      </div>
      <div class="footer-col">
        <h4>Contact Us</h4>
        <p><a href="#">For general inquiries</a></p>
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
        <h4><a href="feedback.php">Feedback</a></h4>
        <br>
      </div>

      <div class="footer-col">
        <h4>E-mail</h4>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 Company Name. All rights reserved.</p>
      <p><a href="#">Privacy Policy</a> <a href="#">Terms & Conditions</a></p>
    </div>
  </footer>

</body>

</html>