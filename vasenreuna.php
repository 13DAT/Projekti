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
 
<ul id="sortable">
  <li class="ui-state-default">kuva1
<a class="th"id="th" role="button" aria-label="Thumbnail" href="">
  <form action="/file-upload" class="dropzone dz-clickable displayed" id="kaa"></form>
  </a>
</li>
         
  <li class="ui-state-default">Kuva2
 <a class="th"id="th" role="button" aria-label="Thumbnail" href="">
  <form action="/file-upload" class="dropzone dz-clickable displayed" id="kab">
        </form></li>
  
  <li class="ui-state-default">Kuva3
<a class="th"id="th" role="button" aria-label="Thumbnail" href="">
<form action="/file-upload" class="dropzone dz-clickable displayed" id="kac">
      </form></li>

  <li class="ui-state-default">Kuva4
  <a class="th"id="th" role="button" aria-label="Thumbnail" href="">
  <form action="/file-upload" class="dropzone dz-clickable displayed" id="kad">
        </form></li>
</ul>
     <script src="http://cosmo.kpedu.fi/~patriksipi/testi/dropzonee.js"></script>
     <script type="text/javascript">
	Dropzone.options.kaa = {
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
    
    Dropzone.options.kac = {            
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
    Dropzone.options.kad = {            
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
</html>