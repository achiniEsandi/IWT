<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="thems.css">
    <style>
    *{
        box-sizing: border-box;
    }
    
    body{
        /* background-image: url('../src/pexels-pixabay-104826.jpg'); */
        background-color: rgba(208, 246, 245, 0.885);
        border-image-source: url(border.png);
        border-image-width: 10px;
        background-size: 1500px;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    body h1{
        font-size: 50px;
        text-shadow: 2px 2px 5px black;
    }

    #main-container{
        
        width: 100%;

    }
    
    #container-box{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        gap:10px;
        margin-top: -6%;
    }

    .box{
        border: 1px solid black;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #container-box #left-box{
        width: 380px; 
        height: 550px;
        background-size: cover;
        border-radius: 10px;
        
    }
    #container-box #left-box img{
        width: 100%;
        height: 100vh;
        background-size: cover;
        border-radius: 10px;
    }

    #container-box #right-box{
         border:none;
        width: 490px; 
        height: 550px;
        color: rgb(0, 0, 0);   
        background-color: rgba(0, 0, 0, 0.4);
        -webkit-backdrop-filter: blur(1px);
        backdrop-filter: blur(6px);
        padding: 20px;
        text-align: justify;
        font-weight: 800;
        border-radius: 10px;

    }
    
    </style>
</head>
<body>
    <h1>privacy policy</h1>
    <section id="main-container">
        
        <div id="container-box">
            <div id="left-box" class="box">
                <img src="../src/pexels-ahmedmuntasir-912050.jpg">
            </div>
            <div id="right-box" class="box">
                1. What information the airline collects from you when you make a reservation, such as your name, contact information, and payment information..<br><br><br>
                2. How the airline will use your information, such as to process your reservation, send you confirmation emails, and personalize your travel experience..<br><br><br>
                3. With whom the airline may share your information, such as government agencies, security screeners, and other airlines involved in your trip.<br><br><br>
                4. How the airline will protect your information, such as using encryption and secure storage facilities.<br><br><br>
                5. Your rights with respect to your information, such as the right to access and correct your information.<br><br><br>
            </div>
        </div>
    </section>

</body>
</html>