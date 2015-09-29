<!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.css">
    <meta charset="UTF-8">
</head>
<body><center>
    <form enctype="multipart/form-data" type="file" name="userfile" class="dropzone" action="upload.php" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="50000000" />
    </form>
<?php



    
    $yhteys=new mysqli("localhost","data14","mv2Mqbm888DvqbjT","data14");
    if(mysqli_connect_errno()) {
        die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
    }
    $yhteys->set_charset('utf8');




                    
                    if(!empty($_FILES)){
                        $targetDir = "/home/anttitaipale/public_html/projekti/Projekti/kuvat/";
                        $fileName = $_FILES['file']['name'];
                        $targetFileName = md5(microtime()).'.jpg';

                        if(move_uploaded_file($_FILES['file']['tmp_name'],$targetDir.$targetFileName)){
                            echo "Lataus onnistui\n";
                            $sql = ("INSERT INTO projekti_kuvat (koodinimi, nimi) VALUES('$targetFileName','$fileName');
                              UPDATE projekti_kuvat           
                              WHERE id = ID;;");
                        } else {
                            echo " ";
                        }
                    } else {
                        echo " ";
                    }

                    if($tulos=$yhteys->multi_query($sql)) {
                        echo " ";}
                    else {
                        echo " ";
                    }
   # echo '<pre>';
    #var_export($GLOBALS);
    
    #echo '</pre>';

    $yhteys->close();



?>

</center>

</body>
<script src="http://cosmo.kpedu.fi/~jannenyman/testi/proto/dropzone.js"></script>
</html>