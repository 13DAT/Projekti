<?php
session_start();
?>

</head>

    <body>
<!-- dropzone laatikot  -->
    </body>

<?php
          $id = $_GET['id'];

          $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");

          if(mysqli_connect_errno()) {
            die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
          }
          $yhteys->set_charset('utf8');
            $sql = ("SELECT * FROM projekti_kuvat
                    WHERE ID = '$id'");



          // aja SQL lause
          $res = mysqli_query($yhteys,$sql) or die("<br>$sql<br>$id ");

          // tulosta se
          $auto = mysqli_fetch_object($res);


          mysqli_close($yhteys);
          ?>

<div id="laatikko">
  <div class="ui-priority-primary">
    <div class="dropzone dz-clickable displayed" id="kaa">
    <img src="http://cosmo.kpedu.fi/~anttitaipale/projekti/Projekti/kuvat/<?php echo $auto->koodinimi; ?>">
    </div>

  </div>
</div>
<!-- estää kuvien stackaamisen "poistamalla" edellisen kuvan -->
     <script src="http://cosmo.kpedu.fi/~jonatanlogland/projekti/Projekti/sivusto/dropzone.js"></script>