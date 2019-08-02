
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title>Confirmation</title>
  <link href="css/cart.css" type="text/css" rel="stylesheet" />  
</head>
<body>
<div id="main_contain" style="width: 25em; height: 20em;">
<h1>Confirmation</h1>
<?php
foreach($_POST as $key => $val){
  if($val == $_POST["cardNumber"])
  {
    print("<p>Card Number: **** **** **** ****</p>\n");
  }
  else if($val == $_POST["security"])
  {
    print("<p>Security Code: ***</p>\n");
  }else{
    print("<p>$key: $val</p>\n");
  }  
 }
 print("<p>Confirmation No: ");
 for($i = 0; $i <= 16; $i++){
  $confNum += rand (0 , 9);
  print($confNum);
 }
 print("</p>");
?>
</div>
</body>
</html>
