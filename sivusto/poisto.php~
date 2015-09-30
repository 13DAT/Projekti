<script>
function confirm_alert(node) {
    return confirm("Oletko varma että haluat poistaa kaikki kuvat?");
}
</script>


<form action="template.php" method="GET">
      <button name="submit" class="button alert" value="TRUE" onclick="return confirm_alert(this);">Poista kaikki kuvat</button>
  </form>
</div>


<?php
      $my = mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
      if(mysqli_connect_errno()){
        die ("mysql, virhe yhteyden luonnissa: " . mysqli_connect_error());
      }
      $my->set_charset('utf8');
      $submit =$my->real_escape_string(trim(htmlentities(strip_tags($_GET['submit']))));

	if($submit){
        $sql = "DELETE FROM `data14`.`projekti_kuvat`;";                                 
        if($tulos = $my->query($sql)){
        }else{
          echo '<p>epäonnistui</p>';              
          echo $sql;
        }}

      mysqli_close($my);
?>
