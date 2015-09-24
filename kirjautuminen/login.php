<?php
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
mysql_select_db("payload",$conn);
$result = mysql_query("SELECT * FROM users WHERE userName='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
$count  = mysql_num_rows($result);
if($count==0) {
$message = "Invalid Username or Password!";
} else {
$message = "You are successfully authenticated!";
}
}
?>