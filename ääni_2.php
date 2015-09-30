<?php
        $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
        if(mysqli_connect_errno()) {
          die("MySQL, virhe yhteyden luonnissa: ".mysqli_connect_error());
        }
        $yhteys->set_charset('utf8');
        $tulos = mysqli_query($yhteys, "SELECT Nimi FROM projekti_äänet
                                        ORDER BY Nimi DESC");
        while($rivi = mysqli_fetch_array($tulos)) {
        echo "<tr>
                 	<td>".$rivi['Nimi']."</td>
					<td>
						<form name='nappi'action='ääni.php' method='POST'>
    						<button name='laheta' value='true' />Valitse</button>		  
						</form>
					</td>
              </tr>";
        }
        mysqli_close($yhteys);
		if($_POST['laheta']="true"){
			$targetFileName = $aani;
		}else{
			echo "Moi";}
?>
