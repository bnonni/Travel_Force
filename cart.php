<?php include './server/DBController.php'; $db_handle = new DBController(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="css/cart.css" type="text/css" rel="stylesheet" />
 <link href="css/home.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="css/parking.css">
 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
 <script type="text/javascript" src="js/card.js"></script>
 <title>Checkout</title>
</head>
<body>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Menu</span>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="./login.php">Login</a>
    <a href="./login.php">Register</a>
    <a href="./search.php">Car Rental</a>
    <a href="./search.php">Parking Services</a>
    <a href="./login.php">Logout</a>
  </div>
<div id="main_contain">
<h2>Cart</h2>
<?php
foreach($_REQUEST as $key => $val){
 if($val != $_REQUEST["_ga"]){if($val != $_REQUEST["PHPSESSID"]){ print("<p>$key: $val</p>\n"); } } }
?>
</div>
<form action="confirmation.php" method="post" id="signup_form" oninput="checkForm(this);">
<h1>Credit Card Form</h1>
<div class="container">
  <label id="CardNumberLabel" for="cardNumber">Card Number</label> 
  <input id="cardNumber" name="cardNumber" type="text" />
  <label id="security" for="security">Security Code</label>
  <input id="security" name="security" type="security" />
  <label id="NameOnCardLabel" for="NameOnCard">Name On Card</label>
  <input id="NameOnCard" name="NameOnCard" type="text" />
  <label id="expiration" for="expiration">Expiration</label>
  <?php echo "<select name=Month>";
    for($i = 0; $i <= 11; $i++){
      $month = date('F', strtotime("first day of $i month"));
      echo "<option value=$month>$month</option> ";
    }
    echo "</select>";
    echo "<select name=Year>";
    for($i = 0; $i <= 5; $i++){
      $year = date('Y', strtotime("last day of +$i year"));
      echo "<option name='$year'>$year</option>";
    }
    echo "</select>"; ?>
  <input style="width: 100%;margin-bottom: 0;" id="submit" type="submit" value="Checkout">
  <div style="margin-top: 1em;" class="amexClass" id="AmericanExpress"></div>
  <div style="margin-top: 1em;" class="visaClass" id="Visa"></div>
  <div style="margin-top: 1em;" class="masterClass" id="MasterCard"></div>
  </div>
</form>
</body>
<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      document.body.style.backgroundColor = "white";
    }
  </script>
</html>