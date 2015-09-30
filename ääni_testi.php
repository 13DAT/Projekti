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

        $id = $rivi->ID;

        $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
        if(mysqli_connect_errno()) {
          die("MySQL, virhe yhteyden luonnissa: ".mysqli_connect_error());
     
        $yhteys->set_charset('utf8');
        $tulos = mysqli_query($yhteys, "SELECT * FROM projekti_äänet
                                        WHERE id = 7;");
                                        
        $rivi = mysqli_fetch_object($tulos);
        echo $rivi->Pitka ;
        mysqli_close($yhteys);
        #print_r($rivi);
        while($rivi = mysqli_fetch_array($tulos)) {
        echo "<tr>                      
                    <td>".$rivi->Pitka."</td>                                               
                    <td><a href=\"ääni_testi.php?id=".$rivi->ID."\" class='small secondary button'>Näytä kuvaus</a><td>
              </tr>";
        session_start();
		$_SESSION['Nimi'] = $rivi['Nimi'];
		$_SESSION['Pitka'] = $rivi['Pitka'];
		$_SESSION['ID'] = $rivi['ID'];
		'<br /><a href="ääni_testi.php"> </a>';
        '<br /><a href="ääni_testi.php?' . SID . '"> </a>';
		}
		}
		mysqli_close($yhteys);

?>

<audio id='myTune' name='audioo'> 
<source src="http://cosmo.kpedu.fi/~patriksipi/Projekti/Projekti/äänet/<?php echo $rivi->Pitka; ?>">
</audio>

</body>
</html>