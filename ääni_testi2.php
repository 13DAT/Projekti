<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.css">
<link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/foundation/css/foundation.css"/>
<link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/icons/foundation-icons/foundation-icons.css">
<script src="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/foundation2/modernizr/modernizr.js"></script>
<script src="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.js"></script>
<style>
div {
  display: inline-block;
}
img {
    width: 720px;
    height: 700px;
    margin-left: -0.27em;
    }

</style>
</head>
</body>
	<button onclick="document.getElementById('myTune').play()">Play Music</button>
	<button onclick="document.getElementById('myTune').pause()">Pause Music</button>
	<button onclick="document.getElementById('myTune').pause(); document.getElementById('myTune').currentTime = 0;">Stop Music</button>

	<?php
	      	$id = $_GET['ID'];

          	$yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");

          	if(mysqli_connect_errno()) {
          	  die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
          	}
          	$yhteys->set_charset('utf8');
          	  $sql = ("SELECT Pitka FROM projekti_äänet
                    WHERE ID = '$id'");

          	// aja SQL lause
          	$res = mysqli_query($yhteys,$sql) or die("<br>$sql<br>$id ");

          	// tulosta se
          	$aani = mysqli_fetch_object($res);
			while($rivi = mysqli_fetch_array($sql)) {
        	echo "<tr>                      
                    <td>".$rivi['Pitka']."</td>                                               
                    <td><a href=\"ääni_tuo.php?id=".$rivi['ID']."\" class='small secondary button'>Näytä kuvaus</a><td>
              </tr>";
        	}
			echo $aani->Pitka;
			
			session_start();
            $_SESSION['Pitka'] = $rivi['Pitka']; 
            '<br /><a href="ääni_testi2.php"> </a>';
            '<br /><a href="ääni_testi2.php?' . SID . '"> </a>';
	        mysqli_close($yhteys);
			/*echo '<form enctype="multipart/form-data" type="file" name="userfile" class="dropzone" action="ääni.php" method="POST">    
            <input type="hidden" name="MAX_FILE_SIZE" value="50000000" />
            <audio id="myTune" name="audioo">
                <source src="http://cosmo.kpedu.fi/~patriksipi/Projekti/Projekti/äänet/'.$rivi->Pitka .'" type="audio/mpeg" name="hk">
            </audio>
        	</form>';*/ 
		    #print_r($rivi);

	?>

	<audio id='myTune' name='audioo'> 
		<source src="http://cosmo.kpedu.fi/~patriksipi/Projekti/Projekti/äänet/<?php echo $rivi->Pitka; ?>">
	</audio>

</body>
</html>