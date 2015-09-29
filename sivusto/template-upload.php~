
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>3D Esitys</title>
<meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more."/>
<meta name="author" content="ZURB, inc. ZURB network also includes zurb.com"/>
<meta name="copyright" content="ZURB, inc. Copyright (c) 2015"/>
<link rel="stylesheet" href="http://cosmo.kpedu.fi/~jonatanlogland/projekti/Projekti/sivusto/foundation2.css"/>
<link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.css">
<link rel="stylesheet" type="text/css" href="kuva.css">
<link rel="stylesheet" href="http://cosmo.kpedu.fi/~jonatanlogland/projekti/Projekti/sivusto/footer.css"/>
<script src="http://foundation.zurb.com/assets/js/modernizr.js"></script>
<link rel="stylesheet" href="http://cosmo.kpedu.fi/~erkkasailynoja/footer.css">
</head>
<body>

<div class="row">
<div class="small-12 columns">
<header>
<h1 style="text-align:center; font-family:Verdana; font-size:300%">Lataa tiedosto</h1>
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
<div class="nav-bar left">
<ul class="button-group">
<li><a href="http://cosmo.kpedu.fi/~jonatanlogland/projekti/Projekti/sivusto/template.php" class="button radius">Takaisin</a></li>
</ul>
</div>


<div class="row">
<div class="small-12 columns">
<hr>
</div>
</div>

<div class="row">
<div class="small-12 columns">
<center>

<form enctype="multipart/form-data" type="file" name="userfile" class="dropzone" action="template-upload.php" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="50000000" />
    </form>

<?php

    $yhteys=new mysqli("localhost","data14","mv2Mqbm888DvqbjT","data14");
    if(mysqli_connect_errno()) {
        die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
    }
    $yhteys->set_charset('utf8');





                    if(!empty($_FILES)){
                        $targetDir = "/home/anttitaipale/public_html/projekti/Projekti/kuvat/";
                        $fileName = $_FILES['file']['name'];
                        $targetFileName = md5(microtime()).'.jpg';

                        if(move_uploaded_file($_FILES['file']['tmp_name'],$targetDir.$targetFileName)){
                            echo "Lataus onnistui\n";
                            $sql = ("INSERT INTO projekti_kuvat (koodinimi, nimi) VALUES('$targetFileName','$fileName');
                              UPDATE projekti_kuvat           
                              WHERE id = ID;;");
                        } else {
                            echo " ";
                        }
                    } else {
                        echo " ";
                    }

                    if($tulos=$yhteys->multi_query($sql)) {
                        echo " ";}
                    else {
                        echo " ";
                    }
   # echo '<pre>';
    #var_export($GLOBALS);

    #echo '</pre>';

    $yhteys->close();



?>
        
</div>
</div>
</center>
<div class="row">
<div class="small-12 columns">
<hr>
</div>
</div>
</ul>

<div class="row">
<div class="small-6">


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
</div>
</div>
<div class="wrapper">

<div class="push"></div>
</div>
<div class="footer">
  <p>copyright ES</p>
  </div>
</body>
<script src="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.js"></script>
</html>