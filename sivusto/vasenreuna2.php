  <script>
  $(function() {
    $( "#sortable1" ).sortable({
      placeholder: "ui-state-highlight"
    });
    $( "#sortable1" ).disableSelection();
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

        $sql = "SELECT * FROM projekti_kuvat ORDER BY id";
        # Suoritetaan SQL-kysely
        $rows = array();
        if($tulos = $m->query($sql) ) {
        # tulostetaan tiedot while()-silmukassa
        while( $t = $tulos->fetch_object() ) {
        # lisätään $rows-taulukkoon karuselli-tietokannan rivin tiedot  
        $rows[]=array($t->id,$t->md5,$t->nimi,$t->url,);
        }
        } else {
        echo "Virhe";
        }
        ?>

<ul id="sortable1">
  <?php  

          $o=0;
          foreach($rows as $i) {
            if(($o++)==0) $class="active";
            else $class="";
            echo '<li class="ui-state-default '.$class.'">
					<a class="th" id="th" role="button" aria-label="Thumbnail" href="">
					  <img id="kuva" aria-hidden=true src="'.$i[3].'" alt="'.$i[1].'" "/>



 					 </a>
       			 </li>
                                                    

                ';
          }

        ?>






        

<script src="http://cosmo.kpedu.fi/~patriksipi/testi/dropzonee.js"></script>
<script type="text/javascript">
</script>