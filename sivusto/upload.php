<!doctype html>
<html>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/~jannenyman/testi/proto/dropzone.css">
    <head>
        <title>dropzone</title>
        <meta charset="UTF-8">
       <style>
        h2{color: #999999; }
        body{
            }
       </style>
   <link rel="stylesheet" type="text/css" href="kuva.css">
    </head>
    <body>
 <h2>KOKEILE TIPUTTAA KUVA RUUTUUN!</h2>
<form enctype="multipart/form-data" type="file" name="userfile" class="dropzone" action="upload.php" method="POST">
</form>
<?php
if(!empty($_FILES)){
$targetDir = "/home/jannenyman/public_html/testi/proto/kuvat/";
    $fileName = $_FILES['file']['name'];
        $targetFile = $targetDir.$fileName;
                if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
echo "File is valid, and was successfully uploaded.\n";
    } else {
            echo "Possible file upload attack!\n";
                    }
}
        ?>
    </body>
     <script src="/~jannenyman/testi/proto/dropzone.js"></script>
</html>