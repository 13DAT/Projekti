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


<?php
        $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
        if(mysqli_connect_errno()) {
          die("MySQL, virhe yhteyden luonnissa: ".mysqli_connect_error());
        }
        $yhteys->set_charset('utf8');
        $tulos = mysqli_query($yhteys, "SELECT koodinimi FROM projekti_kuvat
                                        WHERE ID = 20;");
        $rivi = mysqli_fetch_object($tulos);       
        mysqli_close($yhteys);
        #print_r($rivi);
?>

<div>
<img src="http://cosmo.kpedu.fi/~anttitaipale/projekti/Projekti/kuvat/<?php echo $rivi->koodinimi; ?>">   
</div>
<div>   
<img src="http://cosmo.kpedu.fi/~anttitaipale/projekti/Projekti/kuvat/<?php echo $rivi->koodinimi; ?>">
</div>

