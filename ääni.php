<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.css">
    <head>
        <title>dropzone</title>
        <meta charset="UTF-8">
       <style>
        h2{color: #999999; }
        body{

            }
       </style>
   <link rel="stylesheet" type="text/css" href="kuva.css">

    </head>

    <body>

<button onclick="document.getElementById('myTune').play()">Play Music</button>
<button onclick="document.getElementById('myTune').pause()">Pause Music</button>
<button onclick="document.getElementById('myTune').pause(); document.getElementById('myTune').currentTime = 0;">Stop Music</button>

<form enctype="multipart/form-data" type="file" name="userfile" class="dropzone" action="ääni.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="50000000" />
	<audio id="myTune" name="audioo">
  		<source src="http://cosmo.kpedu.fi/~patriksipi/testi/kuvat/Silly_Farts-Joe-1473367952-2.mp3" type="audio/mpeg" name="hjk"> 
	</audio>
</form>
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
/*    echo '<pre>';
    var_export($GLOBALS);
    
    echo '</pre>';
*/				
    $yhteys->close();
    
    
    
?>
    </body>

     <script src="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.js"></script>

</html>