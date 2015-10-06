<ul id="sortable">
<?php>
$yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
            if(mysqli_connect_errno()) {
                die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
            }
            $yhteys->set_charset('utf8');
                $tulos = mysqli_query($yhteys, "SELECT DISTINCT * 
                                                FROM projekti_kuvat");



        while($rivi = mysqli_fetch_array($tulos)) {

        echo '<li class="ui-state-primary '.$class.'">
                      <a class="th" id="th" role="button" aria-label="Thumbnail" href="template1.php?id='. $rivi['ID'] .'">
                      <img aria-hidden=true style="width: 100%; height: 7.500em;" src="/~anttitaipale/projekti/Projekti/kuvat/'. $rivi['koodinimi'] .'"/>
                      </a>
            </li> ';

                session_start();
                    '<br /><a href="hakuc_tuo.php"> </a>';
                    '<br /><a href="hakuc_tuo.php?' . SID . '"> </a>';
                    $_SESSION['nimi'] = $rivi['nimi'];
                    $_SESSION['koodinimi'] = $rivi['koodinimi'];
                    $_SESSION['ID'] = $rivi['ID'];
                 '<br /><a href="hakuc_tuo.php"> </a>';
                 '<br /><a href="hakuc_tuo.php?' . SID . '"> </a>';
                }


            mysqli_close($yhteys);
        ?>

</ul>