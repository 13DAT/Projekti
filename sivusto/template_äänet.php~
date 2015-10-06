<?php
// Start the session
session_start();
if($_SESSION['login'] != 1){
  header("Location: template-login.php");
  }
?>
<!DOCTYPE HTML>
<html class="no-js" lang="fi" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ääni</title>
    <link rel="shortcut icon" href="autouusi.png">	
	<link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.css">
    <link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/isolaatikko-tyylit3.css">
    <link rel="stylesheet" href="http://cosmo.kpedu.fi/~jonatanlogland/projekti/Projekti/sivusto/footer.css"/>
    <link rel="stylesheet" href="/~jonatanlogland/projekti/Projekti/sivusto/footer.css"/>
    <link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/foundation/css/foundation.css"/>
	<script src="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/modernizr/modernizr.js"></script>
	<link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/icons/foundation-icons/foundation-icons.css">  
	</head>
<body>
<div class="row">
<div class="small-12 columns">
<header>
<h1 style="text-align:center; font-family:Verdana; font-size:300%">Lataa tiedosto</h1>
<div class="nav-bar right">
<a href="/~jonatanlogland/projekti/Projekti/sivusto/template-logout.php" class="button radius">Kirjaudu ulos</a></li></div>
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
<h2>Valitse ääni listasta</h2>
</div>
</div>

<div class="row">
<div class="small-12 columns">
  <div id="laatikko">
	<form enctype="multipart/form-data" type="file" name="userfile" class="dropzone" action="template_äänet.php" method="POST">  
    	<input type="hidden" name="MAX_FILE_SIZE" value="50000000" />
	</form>
	</div>
		<div class="tableresponsive"> 
        <h1>Ääni</h1> 
        <?php
	$yhteys=new mysqli("localhost","data14","mv2Mqbm888DvqbjT","data14");
    if(mysqli_connect_errno()) {
        die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
    }
    $yhteys->set_charset('utf8');
                    $asia = $yhteys->real_escape_string(trim(htmlentities(strip_tags($_POST['MAX_FILE_SIZE']))));
                    if(!empty($_FILES)){
                        $targetDir = "/home/patriksipi/public_html/Projekti/Projekti/äänet/";
                        $fileName = $_FILES['file']['name'];
                        $targetFileName = md5(microtime());
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$targetDir.$targetFileName)){
                    echo "Lataus onnistui\n";
                     $sql = ("INSERT INTO projekti_äänet (Pitka, Nimi) VALUES('$targetFileName','$fileName');
                              UPDATE projekti_äänet           
                              WHERE id = ID;;");
                    } else {
                        echo "\n";
                    }
                    }
                    if($tulos=$yhteys->multi_query($sql)) {
                        echo " ";}
                    else {
                        echo " " . " " . $sql . " " . $yhteys->error;
                    }			
			$yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
            if(mysqli_connect_errno()) {
                die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
            }
            $yhteys->set_charset('utf8');
                $tulos = mysqli_query($yhteys, "SELECT DISTINCT * 
                                                FROM projekti_äänet");
        
        echo  "<table><thead><tr><th>Nimi</th><th>Avaa ääni</td></tr></thead>";                                    
              
        while($rivi = mysqli_fetch_array($tulos)) {
        
        echo "<tr>
                  <td>".$rivi['Nimi']."</td> 
                  <td><a href=\"template.php?id=".$rivi['ID']."\" class='tiny round button'>Näytä</a></td>
              </tr>";
				
				session_start();
				    '<br /><a href="template.php"> </a>';
				    '<br /><a href="template.php?' . SID . '"> </a>';
        			$_SESSION['Nimi'] = $rivi['Nimi'];
        			$_SESSION['Pitka'] = $rivi['Pitka'];
        			$_SESSION['ID'] = $rivi['ID'];
         		 '<br /><a href="template.php"> </a>'; 
        		 '<br /><a href="template.php?' . SID . '"> </a>'; 
                }
            
     
            mysqli_close($yhteys);
        ?>
		<audio id='myTune' name='audioo'>
			<source src="http://cosmo.kpedu.fi/~patriksipi/Projekti/Projekti/äänet/<?php echo $rivi->Pitka; ?>">
		</audio>
		</table>
        </div>
		</p>
        
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
    
    <script src="/~jannenyman/testi/proto/dropzone.js"></script>
    <link type="css" media="screen" rel="stylesheet" href="~jonatanlogland/Foundation/zurb-responsive-tables-0d34bc6/responsive-tables.css" />
    <script type="javascript" src="~jonatanlogland/Foundation/zurb-responsive-tables-0d34bc6/responsive-tables.js"></script>
  </body>
</html>