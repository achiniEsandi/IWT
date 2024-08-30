<html>
<head>
<title>Feedback Form</title>
<style>
  /* Basic styling */
  body {
    font-family: sans-serif;
    background-image: url('login1.png');
    background-size: cover; 
    background-repeat: no-repeat;
  }
 
  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 100px auto;
    width: 400px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  
  label {
    margin-bottom: 10px;
    display: block;
  }
  
  input[type="text"], textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
    resize: vertical; /* Allow textarea to resize */
  }

  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
    resize: vertical; /* Allow textarea to resize */
  }
  
  .rating-container {
    display: flex;
    justify-content: space-between;
  }
  
  .button {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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
    <td><li><a href = "#">Payments</a></li></td>
    <td><li><a href = "help.html">Help</a></li></td>
</ul>

</div>

<div style="background-color:LightBlue;" class="container">
  <h2>Feedback Form</h2>
  <form method="post" action="insertF.php">
    <p>Giving feedback on?</p>
    <select name="feedbackType">
        <option value="reservation">Reservations</option>
        <option value="hotel">Hotels</option>
        <option value="customer support">Customer support</option>
        <option value="payments">Payments</option>
    </select><br><br>

    <p>Rate your overall experience</p>
    <div class="rating-container" name="rating">
      <label for="star-1">1 star</label>
      <input type="radio" name="rating" id="star-1" value="1">
      <label for="star-2">2 stars</label>
      <input type="radio" name="rating" id="star-2" value="2">
      <label for="star-3">3 stars</label>
      <input type="radio" name="rating" id="star-3" value="3">
      <label for="star-4">4 stars</label>
      <input type="radio" name="rating" id="star-4" value="4">
      <label for="star-5">5 stars</label>
      <input type="radio" name="rating" id="star-5" value="5">
    </div>
    
    <br><p>Tell us more</p>
    <textarea id="feedback" name="feedback" rows="4" placeholder="Write your feedback here"></textarea>
    <br><br>  
    <button type="submit"  class="button">Submit</button>
  </form>
</div>

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


