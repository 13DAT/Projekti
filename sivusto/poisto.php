<form action="template.php" method="GET">
      <button name="submit" value="TRUE">poista kuvat</button>
  </form>
</div>
<?php
      $my = mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
      if(mysqli_connect_errno()){
        die ("mysql, virhe yhteyden luonnissa: " . mysqli_connect_error());
      }
      $my->set_charset('utf8');
      $submit =$my->real_escape_string(trim(htmlentities(strip_tags($_GET['submit']))));
      $delete =$my->real_escape_string(trim(htmlentities(strip_tags($_GET['delete']))));

      if($submit){
        $sql = "DELETE FROM `data14`.`projekti_kuvat`;";                                 
        if($tulos = $my->query($sql)){
          echo'<p>onnistui!</p>';              
          echo $sql;
        }else{
          echo '<p>epäonnistui</p>';              
          echo $sql;
        }}
      if($delete){
        $sql2 = "";
        if($tulos = $my->query($sql2)){
          echo'<p>Taulun poisto onnistui</p>';
          echo $sql2;
        }else{
            echo '<p>Taulun poisto epäonnistui</p>';
            echo $sql2;}}

      mysqli_close($my);
    ?>