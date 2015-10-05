<!DOCTYPE html>
<html>
    <head>
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
<body>

<?php
        session_start();
    
        $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
        if(mysqli_connect_errno()) {
          die("MySQL, virhe yhteyden luonnissa: ".mysqli_connect_error());
        }
        $yhteys->set_charset('utf8');
        $tulos = mysqli_query($yhteys, "SELECT koodinimi FROM projekti_kuvat
                                        WHERE ID = 110;");
        
      $_SESSION['rivi'] = mysqli_fetch_object($tulos);
        
        
  
      $last_line = system('convert' , $_SESSION['rivi'] , $_SESSION['rivi'] , '+append', $_SESSION['rivi']);
      
      mysqli_close($yhteys);

?>

<div>
<img src="http://cosmo.kpedu.fi/~anttitaipale/projekti/Projekti/kuvat/<?php echo $_SESSION['rivi']->koodinimi; ?>">   
</div>
<div>   
<img src="http://cosmo.kpedu.fi/~anttitaipale/projekti/Projekti/kuvat/<?php echo $_SESSION['rivi']->koodinimi; ?>">
</div>

</body>
</html>