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
    </body>

     <script src="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.js"></script>

</html>