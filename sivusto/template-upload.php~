<?php
// Start the session
session_start();
$SID = session_id();
if($_SESSION['login'] != 1){
  header("Location: template-login.php");
  }
?>
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
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://foundation.zurb.com/assets/js/modernizr.js"></script>

</head>
<body>

<div class="row">
<div class="small-12 columns">
<h1 style="text-align:center; font-family:Verdana; font-size:300%">Lataa tiedosto</h1>
<div class="nav-bar right">
<a href="/~jonatanlogland/projekti/Projekti/sivusto/template-logout.php" class="button radius">Kirjaudu ulos</a></li>
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
<div class="nav-bar left">
<ul class="button-group">
<li><a href="/~jonatanlogland/projekti/Projekti/sivusto/template.php" class="button radius">Takaisin</a></li>
</ul>
</div>


<div class="row">
<div class="small-12 columns">
<hr>
</div>
</div>

<div class="row">
<div class="small-12 columns">


<div id="laatikko">
  <div class="ui-priority-primary">
<form enctype="multipart/form-data" type="file" name="userfile" class="dropzone dz-clickable displayed" action="template-upload.php" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="50000000" />
    </form>
</div>
</div>

<?php
    $yhteys=new mysqli("localhost","data14","mv2Mqbm888DvqbjT","data14");
    if(mysqli_connect_errno()) {
        die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
    }
    $yhteys->set_charset('utf8');
                    $sqli = ("SELECT *  FROM projekti_kuvat");           
                    $tulos = mysqli_query($yhteys,$sqli);
							$num_rows = mysqli_num_rows($tulos);
                            if($num_rows >= 2){
                            	$tulos2 = mysqli_query($yhteys, "SELECT * FROM projekti_kuvat WHERE SID = *;");
 								$koodinimi = mysqli_fetch_object($tulos2);
 								$last_line = system('convert'.' '."/home/anttitaipale/public_html/projekti/Projekti/kuvat/".$koodinimi->koodinimi.' '. 
 								"/home/anttitaipale/public_html/projekti/Projekti/kuvat/".$koodinimi->koodinimi.' '. '+append'.' '. 
 								"/home/anttitaipale/public_html/projekti/Projekti/kuvat/".$koodinimi->ynimi );
 								}
                            
                            else{ echo "Pelle";}
                            echo "$num_rows Rows\n";
                            
                    
						if(!empty($_FILES)){
                        $targetDir = "/home/anttitaipale/public_html/projekti/Projekti/kuvat/";
                        $fileName = $_FILES['file']['name'];
                        $targetFileName = md5(microtime()).'.jpg';
                        	
                        
                           if(move_uploaded_file($_FILES['file']['tmp_name'],$targetDir.$targetFileName)){
                            echo "Lataus onnistui\n";
                            $sql = ("INSERT INTO projekti_kuvat (koodinimi, nimi, SID) VALUES('$targetFileName','$fileName','$SID');
                                     UPDATE projekti_kuvat           
                                     WHERE id = ID;;");
                            }}
                        	
                      					  
					  
                      if($tulos=$yhteys->multi_query($sql)) {
                      echo " ";}
                      else {echo " ";}
                    
                                         
   #echo '<pre>';
   #var_export($GLOBALS);
   #echo '</pre>';
    $yhteys->close();
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