
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
<script src="http://foundation.zurb.com/assets/js/modernizr.js"></script>
</head>
<body>


<div class="row">
<div class="large-12 columns">
<img src="http://placehold.it/1810x200&text=Lataa tiedosto tietokantaan">
</div>
</div>

<div class="row">
<div class="large-12 columns">
<hr>
</div>
</div>



<div class="row">
<div class="large-12 columns">
<div class="nav-bar left">
<ul class="button-group">
<li><a href="http://cosmo.kpedu.fi/~jonatanlogland/projekti/Projekti/sivusto/template.php" class="button radius">Takaisin</a></li>
</ul>
</div>
<div class="nav-bar right">
<ul class="button-group">
<li><a href="http://cosmo.kpedu.fi/~jonatanlogland/projekti/Projekti/sivusto/template-upload.php" class="button radius">Lataa</a></li>
<li><a href="http://cosmo.kpedu.fi/~jonatanlogland/projekti/Projekti/sivusto/fullscreen.php" class="button radius">Koko näyttö</a></li>
<li><a href="http://cosmo.kpedu.fi/~jonatanlogland/projekti/Projekti/sivusto/template-ääni.php" class="button radius">Äänet</a></li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="large-12 columns">
<hr>
</div>
</div>
<div class="row">
<div class="large-12 columns">
<center>
<audio id="myTune">
  <source src="http://cosmo.kpedu.fi/~patriksipi/testi/kuvat/Silly_Farts-Joe-1473367952-2.mp3" type="audio/mpeg">
</audio>
<button onclick="document.getElementById('myTune').play()">Play Music</button>
<button onclick="document.getElementById('myTune').pause()">Pause Music</button>
<button onclick="document.getElementById('myTune').pause(); document.getElementById('myTune').currentTime = 0;">Stop Music</button>

<form enctype="multipart/form-data" type="file" name="userfile" class="dropzone" action="ääni.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="50000000" />
</form>
<?php

    if(!empty($_FILES)){
        $targetDir = "/home/patriksipi/public_html/Projekti/Projekti/äänet/";
            $fileName = $_FILES['file']['name'];
            $str = time($_FILES['user_image']['name'], PATHINFO_EXTENSION);
            $targetFile = $targetDir. md5(time($_FILES['user_image']['name']) ).$str;
    if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
        echo "Lataus onnistui\n";
    } else {
        echo "\n";
    }
    }
        ?>        
</div>
</div>
</center>
<div class="row">
<div class="large-12 columns">
<hr>
</div>
</div>
<div class="row">
<div class="large-6 columns">
<p>© Copyright Loco</p>
</div>
</ul>
</div>


</footer>
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
<script src="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.js"></script>
</body>
</html>