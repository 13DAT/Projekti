   <script>
  $(function() {
    $( "#sortable" ).sortable({
      placeholder: "ui-state-primary"
    });
    $( "#sortable" ).disableSelection();
  });
  </script>

</head>
<body>
 <?php
        $m=new mysqli("localhost","data14","mv2Mqbm888DvqbjT","data14");
        if(mysqli_connect_errno()) {
        die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
        }
        $m->set_charset('utf8');

        $sql = "SELECT * FROM projekti_kuvat ORDER BY ID";
        # Suoritetaan SQL-kysely
        $rows = array();
        if($tulos = $m->query($sql) ) {
        # tulostetaan tiedot while()-silmukassa
        while( $t = $tulos->fetch_object() ) {
        # lisätään $rows-taulukkoon karuselli-tietokannan rivin tiedot  
        $rows[]=array($t->ID,$t->koodinimi,$t->nimi,);
        }
        } else {
        echo "Virhe";
        }
        ?>


<ul id="sortable">
  <?php

          $o=0;
          foreach($rows as $i) {
            if(($o++)==0) $class="active";
            else $class="";
            echo '<li class="ui-state-primary '.$class.'">
                      <a class="th" id="th" role="button" aria-label="Thumbnail" href="http://cosmo.kpedu.fi/~mathiasthlin/projekti/Projekti/oikealaatikko.php">
                      <img aria-hidden=true style="width: 13.588em; height: 7.500em;" src="http://cosmo.kpedu.fi/~anttitaipale/projekti/Projekti/kuvat/0cb89e525e0b5892d991b389000c5ada.jpg "/>
                         </a>
                 </li> ';
          }

        ?>


</body>


<script src="http://cosmo.kpedu.fi/~patriksipi/testi/dropzonee.js"></script>
<script type="text/javascript">

</script>


