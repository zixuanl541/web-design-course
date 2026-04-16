<!DOCTYPE html>
<html>    
<head>
<meta charset="utf-8" />
<title>catalog.php</title>

<?php
session_start();  

if ( isset($_POST["Item"]) ) {
   
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];  
   $_SESSION["ID"] = $id; 

   switch (strtoupper($id)) {
      case "S001":
         $_SESSION["Name"] = "10吋平板電腦";
         $_SESSION["Price"] = 12000;
         break;
      case "S002":
         $_SESSION["Name"] = "15.6吋筆記型電腦";
         $_SESSION["Price"] = 27000;
         break;
      case "S003":
         $_SESSION["Name"] = "iPhone智慧型手機";
         $_SESSION["Price"] = 21000;
         break;   
   }  

   header("Location: savecart.php");  
   exit();
}
?>

</head>
<body bgcolor="#F5F7FA" text="#333333">
<center>
<h2 style="color:#2C3E50;">商品目錄</h2>
<table border="0" cellpadding="15" cellspacing="0" width="50%" bgcolor="#FFFFFF">
<tr>
<td align="center">

<form action="catalog.php" method="post">
選擇商品: 
<select name="Item">
  <option value="S001">10吋平板電腦 - $12000</option>
  <option value="S002">15.6吋筆記型電腦 - $27000</option>
  <option value="S003">iPhone智慧型手機 - $21000</option> 
</select>
數量:
<input type="text" size="5" name="Quantity" value="1"/>

<input type="submit" value="訂購"/>
</form>

<hr/>| <a href="catalog.php">商品目錄</a>
| <a href="shoppingcart.php">檢視購物車</a> |
</body>
</html>