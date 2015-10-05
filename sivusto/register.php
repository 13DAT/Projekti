<!DOCTYPE html>
<html lang="fi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="getbootstrap.com/favicon.ico">
    <title>Rekisteröityminen</title>
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Bootstrap core CSS -->
    <link href="getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
  </head>
<!-- NAVBAR
================================================== -->
  <body>
     
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
    <body><center>
    <h1>Luo tili</h1>
      <form action="register.php" method="POST">
      <input type="text" name="tunnus" placeholder="käyttäjätunnus">
      <input type="text" name="salasana" placeholder="salasana">
      <button name="submit" value="TRUE">Suorita</button>
 	


    <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
    <div class="table-responsive">
    <table class="table table-hover table-bordered"><br>
    <?php
      $my = mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
      if(mysqli_connect_errno()){
        die ("mysql, virhe yhteyden luonnisse: " . mysqli_connect_error());
      }
      $my->set_charset('utf8');

      $salasana =$my->real_escape_string(trim(htmlentities(strip_tags($_POST['salasana']))));
      $tunnus =$my->real_escape_string(trim(htmlentities(strip_tags($_POST['tunnus']))));

      $submit =$my->real_escape_string(trim(htmlentities(strip_tags($_POST['submit']))));

      if($submit){
        $sql = "INSERT INTO `data14`.`tunnus` (`tunnus`,`salasana`)
                VALUES('$tunnus','$salasana');";
        if($tulos = $my->multi_query($sql)){
          echo'<p>Nimi tallennettu!</p>';
          echo $sql;
        }else{
          echo '<p>Nimen tallennus epäonnistui</p>';
          echo $sql;
        }}
      mysqli_close($my);
    ?>
    </table>
      </div>
    </div>
    </div>
    </div>

      

     

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>