<script>
  $(function() {
    $( "#sortable" ).sortable({
      placeholder: "ui-state-highlight"
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
        $rows[]=array($t->ID,$t->koodinimi,$t->nimi);
        }
        } else {
        echo "Virhe";
        }
        ?>

<script type="text/javascript"></script>
<ul id="sortable">
  <?php  
          $o=0;
          foreach($rows as $i) {
            if(($o++)==0) $class="active";
            else $class="";
            echo '<li class="ui-state-primary '.$class.'">
					<a class="th" id="th" role="button" aria-label="Thumbnail" href="http://cosmo.kpedu.fi/~mathiasthlin/projekti/Projekti/oikealaatikko.php">
					  <img aria-hidden=true style="width:15.625em; height:6.250em;" src="'.$i[1].'" alt="'.$i[1].'">
						 </a>
       			 </li> ';
          }
        ?>
</ul>

</body>


</html>