<!DOCTYPE html>
<html lang="fi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rekisteröityminen</title>
  </head>
<body>
<h1>Luo tili</h1>
  <form action="template-register.php" method="POST">
  <input type="text" name="tunnus" placeholder="käyttäjätunnus">
  <input type="text" name="salasana" placeholder="salasana">
  <button name="submit" value="TRUE">Luo tili</button>
  <a href="template-login.php">kirjaudu sisään</a>
  <?php
    $my = mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
    if(mysqli_connect_errno()){
      die ("mysql, virhe yhteyden luonnisse: " . mysqli_connect_error());
    }
    $my->set_charset('utf8');
    $salasana =$my->real_escape_string(trim(htmlentities(strip_tags($_POST['salasana']))));
    $tunnus =$my->real_escape_string(trim(htmlentities(strip_tags($_POST['tunnus']))));
    $submit =$my->real_escape_string(trim(htmlentities(strip_tags($_POST['submit']))));

    if($submit){
      $sql = "INSERT INTO `data14`.`tunnus` (`tunnus`,`salasana`)
              VALUES('$tunnus','$salasana');";
      if($tulos = $my->multi_query($sql)){
        echo'<p>Nimi tallennettu!</p>';
        echo $sql;
      }else{
        echo '<p>Nimen tallennus epäonnistui</p>';
        echo $sql;
      }}
    mysqli_close($my);
  ?>
</body>
</html>