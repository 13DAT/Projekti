<html>
<head>
<meta charset="utf-8">
<title>login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="getbootstrap.com/favicon.ico">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body><center><br>
<h1>kirjaudu sisään</h1>
<form action="login.php" method="GET" name="log">
 <input type="text" name="tunnus" placeholder="käyttäjätunnus"><br>
 <input type="password" name="salasana" placeholder="salasana"><br>
 <button name="submit" value="submit">Suorita</button>
</form>
<?php
#starts a new session
session_start();

$my = mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
      if(mysqli_connect_errno()){
        die ("mysql, virhe yhteyden luonnissa: " . mysqli_connect_error());
      }
      $my->set_charset('utf8');

#catches user/password submitted by html form
$tunnus = $_GET['tunnus'];
$salasana = $_GET['salasana'];

#checks if the html form is filled
if(empty($_GET['tunnus']) || empty($_GET['salasana'])){
    echo "Fill all the fields!";
}else{

#searches for user and password in the database
$query = "SELECT * FROM tunnus WHERE tunnus='$tunnus' AND
         salasana='$salasana' ";
$result = mysqli_query($my,$query);  //$conn is your connection in 'connection.php'

#checks if the search was made
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
#creates sessions
     while($row = mysqli_fetch_array($result)){  
       $_SESSION['id'] = $row['id'];
       $_SESSION['tunnus'] = $row['tunnus'];
       $_SESSION['salasana'] = $row['salasana'];
       $_SESSION['login'] = $login;
    }
#redirects user
    header("Location: template.php");
}}
 mysqli_close($my);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="http://getbootstrap.com/assets/js/docs.min.js"></script>
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</center>
</body>
</html>