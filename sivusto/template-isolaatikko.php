<?php
          $id = $_GET['id'];

          $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");

          if(mysqli_connect_errno()) {
            die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
          }
          $yhteys->set_charset('utf8');
            $sql = ("SELECT * FROM projekti_kuvat
                    WHERE ID = '$id'");



          
          $res = mysqli_query($yhteys,$sql) or die("<br>$sql<br>$id ");

          
          $auto = mysqli_fetch_object($res);


          mysqli_close($yhteys);
          ?>

    
     
