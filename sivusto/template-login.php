<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Kirjaudu sisään</title>
<meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more."/>
<meta name="author" content="ZURB, inc. ZURB network also includes zurb.com"/>
<meta name="copyright" content="ZURB, inc. Copyright (c) 2015"/>
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/foundation2.css"/>
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/dropzone2.css"/>
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/isolaatikko-tyylit2.css">
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/jquery.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/footer.css"/>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://foundation.zurb.com/assets/js/modernizr.js"></script>

</head>
<body>

<div class="row">
<div class="small-12 columns">
<header>
<h1 style="text-align:center; font-family:Verdana; font-size:300%">Kirjaudu sisään</h1>
</header>
</div>
</div>

<div class="row">
<div class="small-12 columns">
<hr>
</div>
</div>

<div class="row">
<div class="small-12 columns">
<form action="template-login.php" method="POST" name="log">
 <input type="text" name="tunnus" placeholder="Käyttäjätunnus"><br>
 <input type="password" name="salasana" placeholder="Salasana"><br>
 <button name="submit" value="submit">Kirjaudu</button>
</form>
<?php

session_start();

$my = mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
      if(mysqli_connect_errno()){
        die ("mysql, virhe yhteyden luonnissa: " . mysqli_connect_error());
      }
      $my->set_charset('utf8');


$tunnus = $_POST['tunnus'];
$salasana = $_POST['salasana'];


if(empty($_POST['tunnus']) || empty($_POST['salasana'])){
    echo "Fill all the fields!";
}else{


$query = "SELECT * FROM tunnus WHERE tunnus='$tunnus' AND
         salasana='$salasana' ";
$result = mysqli_query($my,$query);


if($result === false){
     die;
     echo "Kirjautuminen epäonnistui!";
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
          
</div>
</div>

<div class="row">
<div class="small-12 columns">
<hr>
</div>
</div>
</ul>

<div class="row">
<div class="small-12 columns">

<div id="clearfooter"></div>
<div class="footer">
<p>&copy; 2015 13DAT</p>
</div>

</div>
</div>




<script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
<script src="http://foundation.zurb.com/assets/js/jquery.js"></script>
<script src="http://foundation.zurb.com/templates/js/foundation.min.js"></script>
<script>
    $(document).foundation();
  </script>
<script src="http://foundation.zurb.com/assets/js/templates/jquery.js"></script>
<script src="http://foundation.zurb.com/assets/js/templates/foundation.js"></script>
<script>
      $(document).foundation();

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>



</body>

<script src="/~jonatanlogland/projekti/Projekti/sivusto/dropzone2.js"></script>

</html>