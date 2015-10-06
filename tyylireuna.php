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
      
    
        $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
        if(mysqli_connect_errno()) {
          die("MySQL, virhe yhteyden luonnissa: ".mysqli_connect_error());
        }
        $yhteys->set_charset('utf8');
        $tulos = mysqli_query($yhteys, "SELECT * FROM projekti_kuvat
                                        WHERE ID = 114;");
        
      $koodinimi = mysqli_fetch_object($tulos);
        
        
  
      
      $last_line = system('convert'.' '."/home/anttitaipale/public_html/projekti/Projekti/kuvat/".$koodinimi->koodinimi.' '. "/home/anttitaipale/public_html/projekti/Projekti/kuvat/".$koodinimi->koodinimi.' '. '+append'.' '. "/home/anttitaipale/public_html/projekti/Projekti/kuvat/".$koodinimi->ynimi );
      #'convert'.' ' . $_SESSION['rivi']->koodinimi . ' ' . $_SESSION['rivi']->koodinimi. ' ' . '+append' . ' ' .$_SESSION['rivi']->koodinimi;
      #'convert'.' '."/home/anttitaipale/public_html/projekti/Projekti/kuvat/".$_SESSION['rivi']->koodinimi.' '. "/home/anttitaipale/public_html/projekti/Projekti/kuvat/".$_SESSION['rivi']->koodinimi.' '. '+append'.' '. "/home/anttitaipale/public_html/projekti/Projekti/kuvat/".$_SESSION['rivi']->koodinimi;
      
                 
      mysqli_close($yhteys);

?>

<div>
<img src="/~anttitaipale/projekti/Projekti/kuvat/<?php echo $koodinimi->koodinimi; ?>">   
</div>
<div>   
<img src="/~anttitaipale/projekti/Projekti/kuvat/<?php echo $koodinimi->koodinimi; ?>">
</div>

</body>
</html>