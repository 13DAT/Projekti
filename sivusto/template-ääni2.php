
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
<link rel="stylesheet" href="isolaatikko-tyylit.css">
<script src="http://foundation.zurb.com/assets/js/modernizr.js"></script>



</head>
<body>

<div class="row">
<div class="large-12 columns">
<img src="http://placehold.it/1810x200&text=3D-Esitys">
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
<audio id="myTune">
  <source src="http://cosmo.kpedu.fi/~patriksipi/testi/kuvat/Silly_Farts-Joe-1473367952-2.mp3" type="audio/mpeg">
  </audio>
  <button onclick="document.getElementById('myTune').play()">Play Music</button>
  <button onclick="document.getElementById('myTune').pause()">Pause Music</button>
  <button onclick="document.getElementById('myTune').pause(); document.getElementById('myTune').currentTime = 0;">Stop Music</button>
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
<div class="small-10 small-push-2 columns">
<?php include("isolaatikko.php");?>
</div>
<div class="small-2 small-pull-10 columns">
<img src="http://placehold.it/300x217&text=[Kuva]">
<img src="http://placehold.it/300x217&text=[Kuva]">
<img src="http://placehold.it/300x217&text=[Kuva]">
<img src="http://placehold.it/300x217&text=[Kuva]">
</div>
</div>
<div class="row">
<div class="large-12 columns">
<hr>
</div>
</div>
</ul>
<div class="row">
<div class="large-6">
<?php include("footer.php"); ?>
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
</html>