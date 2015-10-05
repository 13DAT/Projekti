<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="getbootstrap.com/favicon.ico">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body><center><br>
<?php
#starts a new session
session_start();
echo "<h1>olet kirjautumut ulos</h1>";
// remove all session variables
session_unset(); 
// destroy the session 
session_destroy();
?>
<a href="http://cosmo.kpedu.fi/~jannenyman/testi/login/login.php" class="button radius">kirjaudu sisään</a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="http://getbootstrap.com/assets/js/docs.min.js"></script>
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</center>
</body>
</html>