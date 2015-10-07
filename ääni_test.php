<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.css">
<link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/foundation/css/foundation.css"/>
<link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/icons/foundation-icons/foundation-icons
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

<?php
        $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
        if(mysqli_connect_errno()) {
          die("MySQL, virhe yhteyden luonnissa: ".mysqli_connect_error());
        }
        $yhteys->set_charset('utf8');
        $tulos = mysqli_query($yhteys, "SELECT Pitka FROM projekti_äänet
                                        WHERE ID = 7;");
        $rivi = mysqli_fetch_object($tulos);       
        mysqli_close($yhteys);
        #print_r($rivi);
		echo $rivi->koodinimi
?>

<div>
<img src="http://cosmo.kpedu.fi/~anttitaipale/projekti/Projekti/kuvat/<?php echo $rivi->koodinimi; ?>">   
</div>
<div>   
<img src="http://cosmo.kpedu.fi/~anttitaipale/projekti/Projekti/kuvat/<?php echo $rivi->koodinimi; ?>">
</div>
</body>
</html>