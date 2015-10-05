<html>
<head>
<meta charset="utf-8">
<title>login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">


</head>
<body>
<h1>kirjaudu sisään</h1>
<form action="login.php" method="GET" name="log">
 <input type="text" name="tunnus" placeholder="käyttäjätunnus"><br>
 <input type="password" name="salasana" placeholder="salasana"><br>
 <button name="submit" value="submit">Suorita</button>
</form>
<?php

session_start();

$my = mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
      if(mysqli_connect_errno()){
        die ("mysql, virhe yhteyden luonnissa: " . mysqli_connect_error());
      }
      $my->set_charset('utf8');


$tunnus = $_GET['tunnus'];
$salasana = $_GET['salasana'];


if(empty($_GET['tunnus']) || empty($_GET['salasana'])){
    echo "Fill all the fields!";
}else{


$query = "SELECT * FROM tunnus WHERE tunnus='$tunnus' AND
         salasana='$salasana' ";
$result = mysqli_query($my,$query);  


if($result === false){
     die;
     echo "paskahomma";
}else{
}
$rows=mysqli_num_rows($result);
if($rows != 1){
  echo "Käyttäjätunnus tai salasana väärin!";
}else{
       $login = 1;

     while($row = mysqli_fetch_array($result)){  
       $_SESSION['id'] = $row['id'];
       $_SESSION['tunnus'] = $row['tunnus'];
       $_SESSION['salasana'] = $row['salasana'];
       $_SESSION['login'] = $login;
    }

    header("Location: template.php");
}}
 mysqli_close($my);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</body>
</html>