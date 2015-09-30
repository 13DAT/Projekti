<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>vasenreuna</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="http://cosmo.kpedu.fi/~patriksipi/testi/dropzone.css">
  <link rel="stylesheet" href="http://cosmo.kpedu.fi/~mathiasthlin/projekti/Projekti/vasentyyli.css">
 
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
            echo '<li class="ui-stste-default '.$class.'">
					<a class="th" id="th" role="button" aria-label="Thumbnail" href="">
					  <img aria-hidden=true src="'.$i[3].'" alt="'.$i[0].'" "/>
					  </a>
       			 </li>;
					<a class="th" id="th" role="button" aria-label="Thumbnail" href="http://cosmo.kpedu.fi/~mathiasthlin/projekti/Projekti/oikealaatikko.php">
					  <img aria-hidden=true src="kuvat/'.$i[1].' "/>
						 </a>
       			 </li> ';
          }
        ?>
        
     <ul id="sortable">
  <li class="ui-state-default">
      <form action="/file-upload" class="dropzone dz-clickable displayed" id="kad">
      </form>
  </li>
</ul>
        
        
<script src="http://cosmo.kpedu.fi/~patriksipi/testi/dropzonee.js"></script>
<script type="text/javascript">
Dropzone.options.kab = {
        accept: function(file, done) {
            console.log("uploaded");
            done();
        },
        init:function() {
            this.on("addedfile", function(){
                if (this.files[1]!=null){
                    this.removeFile(this.files[0]);
                }
            });
        }
    };
     Dropzone.options.kab = {
        accept: function(file, done) {
            console.log("uploaded");
            done();
        },
        init:function() {
            this.on("addedfile", function(){
                if (this.files[1]!=null){
                    this.removeFile(this.files[0]);
                }
            });
        }
    };
</script>
</body>

</body>

<script src="http://cosmo.kpedu.fi/~patriksipi/testi/dropzonee.js"></script>
<script type="text/javascript">
</script>

</html>