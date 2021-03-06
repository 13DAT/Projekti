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
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/dropzone2.css"/>
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/isolaatikko-tyylit2.css">
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/jquery.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/footer.css"/>
<link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/logout-tyylit.css"/>
<script src="code.jquery.com/jquery-1.10.2.js"></script>
<script src="code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://foundation.zurb.com/assets/js/modernizr.js"></script>

</head>
<body>
<div id="logout">
<div class="row">
<div class="small-12 columns">
<?php
#starts a new session
session_start();
echo "<h1>Kirjauduit ulos.</h1>";
// remove all session variables
session_unset();
// destroy the session 
session_destroy();
?>
<a href="/~jonatanlogland/projekti/Projekti/sivusto/template-login.php" class="button radius">Kirjaudu sisään</a>
          
</div>
</div>
</div>

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