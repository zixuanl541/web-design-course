<!DOCTYPE html>
<html>  
<head>
<meta charset="utf-8" />
<title>shoppingcart.php</title>

<?php
function each(&$array) {
   $res = array();
   $key = key($array);
   if($key !== null){
       next($array); 
       $res[1] = $res['value'] = $array[$key];
       $res[0] = $res['key'] = $key;
   }else{
       $res = false;
   }
   return $res;
}
?>

</head>

<body bgcolor="#F5F7FA" text="#333333">

<center>
<h2 style="color:#2C3E50;">購物車內容</h2>

<table border="1" cellpadding="10" cellspacing="0" width="70%">
  <tr bgcolor="#4A90E2" style="color:white;">
   <td>功能</td> <td>編號</td> <td>名稱</td> <td>價格</td> <td>數量</td>
  </tr>

<?php
$flag = false;
$total = 0;

while ( list($arr, $value) = each($_COOKIE) ) {
  if ( isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr]) ) {
     if ($flag) {   
        $flag = false;
        $color="#EAF4FF";
     } else {
        $flag = true;
        $color="#FDFDFD";
     }

     echo "<tr bgcolor='".$color."'>";
     echo "<td><a href='delete.php?Id=".$arr."'>刪除</a></td>";

     $price = 0;
     $quantity = 0; 

     while ( list($name, $value) = each($_COOKIE[$arr])) {
        echo "<td>" . $value . "</td>";
        if ($name == "Price"){
         $price = $value;
        }
        if ($name == "Quantity"){
         $quantity = $value;
        } 
     }

     $total += $price * $quantity;  
     echo "</tr>";
  }
}

if ($total != 0) {  
   echo "<tr bgcolor='#FFF3CD'>";
   echo "<td colspan='5' align='right' style='font-weight:bold; color:#856404;'>";
   echo "總金額 = NT$" . $total . "元";
   echo "</td></tr>";
}
?>
</table>

<hr/>
| <a href="catalog.php">商品目錄</a>
| <a href="shoppingcart.php">檢視購物車</a> |

</center>
</body>
</html>