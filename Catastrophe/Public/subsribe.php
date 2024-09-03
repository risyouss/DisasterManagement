<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['user'])) {
    header("Location: register.php");
    exit();
}
?>
<html>
  <head>
    <title>BLM | Subscribe here</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../index.css" />
    <link rel="icon" href="../Images/justlogo.jpg" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Fredoka+One&family=Kanit:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel=”stylesheet”
    href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
    <style>
    
  @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu&display=swap');

      *{
        font-family: "Poppins";
        font-size: 1.7rem;
      }
      .info p {
    text-align:center;
    color: #999;
    text-transform:none;
    font-weight:600;
    font-size:15px;
    margin-top:2px
  }
  
  .info i {
    color:#F6AA93;
  }
  form h1 {
    font-size: 18px;
    background: #F6AA93 none repeat scroll 0% 0%;
    color: rgb(255, 255, 255);
    padding: 22px 25px;
    border-radius: 5px 5px 0px 0px;
    margin: auto;
    text-shadow: none; 
    text-align:left
  }
  
  form {
    border-radius: 5px;
    max-width:700px;
    width:100%;
    margin: 5% auto;
    background-color: #FFFFFF;
    overflow: hidden;
  }
  
  p span {
    color: #F00;
  }
  
  p {
    margin: 0px;
    font-weight: 500;
    line-height: 2;
    color:#333;
  }
  
  h1 {
    text-align:center; 
    color:rgb(69, 109, 193);
    text-shadow: 1px 1px 0px #FFF;
    margin:50px 0px 0px 0px
  }
  
  input {
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #eee;
    margin-bottom: 15px;
    width: 75%;
    height: 40px;
    float: left;
    padding: 0px 15px;
  }
  
  a {
    text-decoration:inherit
  }
  
  textarea {
    border-radius: 0px 5px 5px 0px;
    border: 1px solid #EEE;
    margin: 0;
    width: 75%;
    height: 130px; 
    float: left;
    padding: 0px 15px;
  }
  
  .form-group {
    overflow: hidden;
    clear: both;
  }
  
  .icon-case {
    width: 35px;
    float: left;
    border-radius: 5px 0px 0px 5px;
    background:#eeeeee;
    height:42px;
    position: relative;
    text-align: center;
    line-height:40px;
  }
  
  i {
    color:white;
  }
  
  
  .contentform {
    padding: 40px 30px;
  }
  
  .bouton-contact{
    color: #FFF;
    text-align: center;
    width: 100%;
    border:0;
    padding: 17px 25px;
    border-radius: 0px 0px 5px 5px;
    cursor: pointer;
    margin-top: 40px;
    font-size: 18px;
  }
  
  .leftcontact {
    width:49.5%; 
    float:left;
    border-right: 1px dotted #CCC;
    box-sizing: border-box;
    padding: 0px 15px 0px 0px;
  }
  
  .rightcontact {
    width:49.5%;
    float:right;
    box-sizing: border-box;
    padding: 0px 0px 0px 15px;
  }
  
  .validation {
    display:none;
    margin: 0 0 10px;
    font-weight:400;
    font-size:13px;
    color: #DE5959;
  }
  
  #sendmessage {
    border:1px solid #fff;
    display:none;
    text-align:center;
    margin:10px 0;
    font-weight:600;
    margin-bottom:30px;
    background-color: #EBF6E0;
    color: rgb(69, 109, 193);
    border: 1px solid lightblue;
    padding: 13px 40px 13px 18px;
    border-radius: 3px;
    box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
  }
  
  #sendmessage.show,.show  {
    display:block;  
  }
  .bouton-contact{
    background-color: rgb(69, 109, 193);
  }
    </style>
    <script src="https://smtpjs.com/v3/smtp.js">
    </script>
  </head>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe for Alerts</title>
</head>
<body>
    <h1>SUBSCRIBE FOR ALERTS</h1>
    
    <form method="post" action="register.php">
        <label for="Name">Name:</label>
        <input type="text" name="Name" required>
        <br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required>
        <br>

        <label for="address">Address:</label>
        <input type="text" name="address" required>
        <br>

        <label for="country-state">Select state:</label>
        <select id="country-state" name="country-state">
            <!-- Include your state options here -->
            <option value="state1">State 1</option>
            <option value="state2">State 2</option>
            <!-- Add more options as needed -->
        </select>
        <br>

        <label for="phno">Phone number:</label>
        <input type="text" name="phno" required>
        <br>

        <button type="submit">Subscribe</button>
    </form>

    <!-- Additional HTML or scripts as needed -->

    <!-- Site footer -->
    <footer class="footer">
        <!-- Include your footer content here -->
    </footer>
</body>
</html>

