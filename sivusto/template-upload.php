
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


<div class="row">
<div class="large-12 columns">
<hr>
</div>
</div>
<div class="row">
<div class="large-12 columns">
<center>
<form enctype="multipart/form-data" type="file" name="userfile" class="dropzone" action="upload.php" method="POST">
</form>
<?php
if(!empty($_FILES)){
$targetDir = "/home/jannenyman/public_html/testi/proto/kuvat/";
    $fileName = $_FILES['file']['name'];
        $targetFile = $targetDir.$fileName;
                if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
echo "File is valid, and was successfully uploaded.\n";
    } else {
            echo "Possible file upload attack!\n";
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
<script src="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.js"></script>
</body>
</html>