
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Kolmiulotteinen esitys</title>
<meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more."/>
<meta name="author" content="ZURB, inc. ZURB network also includes zurb.com"/>
<meta name="copyright" content="ZURB, inc. Copyright (c) 2015"/>
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/foundation2.css"/>
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/dropzone1.css">
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/isolaatikko-tyylit.css">
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/jquery.css">
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/vasentyyli.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/footer.css"/>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="/~jonatanlogland/projekti/Projekti/sivusto/bower_components/modernizr/src/Modernizr.js"></script>



</head>
<body>


<div class="row">
<div class="small-12 columns">
<header>
<h1 style="text-align:center; font-family:Verdana; font-size:300%;">Kolmiulotteinen esitys</h1>
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
  <a href="/~jonatanlogland/projekti/Projekti/sivusto/template-äänet.php" class="button radius success">Valitse musiikkia</a></li>
  <button onclick="document.getElementById('myTune').play();">Soita musiikkia</button>
  <button onclick="document.getElementById('myTune').pause()">Keskeytä musiikki</button>
  <button onclick="document.getElementById('myTune').pause(); document.getElementById('myTune').currentTime = 0;">Lopeta musiikki</button>
</div>

<?php include("ääni_tuo.php");?>

<div class="nav-bar right">
<ul class="button-group">
<li><a href="/~jonatanlogland/projekti/Projekti/sivusto/template-upload.php" class="button radius success">Lataa kuvia</a></li>
<li><button id="ok" class="button radius success">Koko näyttö</a></li>
 


</ul>
</div>
</div>
</div>

<div class="row">
<div class="small-12 columns">
<hr>                          
</div>
</div>

<div class="row">
<div class="small-12 columns">
<?php include("poisto.php");?>
</div>
</div>


<div class="row">
<div class="small-10 small-push-2 columns">
<?php include("isolaatikko.php");?>
</div>

<div class="small-2 small-pull-10 columns">
<?php include("vasenreuna2.php");?>
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
</div>0
</div>
</ul>

<script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
<script src="/~jonatanlogland/projekti/Projekti/sivusto/jquery-assets.js"></script>
<script src="/~jonatanlogland/projekti/Projekti/sivusto/bower_components/foundation/js/foundation.min.js"></script>
<script>
    $(document).foundation();
  </script>
<script src="/~jonatanlogland/projekti/Projekti/sivusto/jquery-assets.js"></script>
<script src="/~jonatanlogland/projekti/Projekti/sivusto/bower_components/foundation/js/foundation.min.js"></script> 
<script>

      $(document).foundation();

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>


<script src="/~patriksipi/testi/dropzonee.js"></script>
</body>
</html>