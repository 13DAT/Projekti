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
<style>

  #sortable { list-style-type: none; margin: 0; padding: 0; width: 14.4em; }
  #kaa{width:100px; height:100px;}
  #kab{width:100px; height:100px;}
  #kac{width:100px; height:100px;}
  #kad{width:100px; height:100px;}
 
  #sortable li { width: 14.4em; margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; height: 1.5em; }
  html>body #sortable li { height: 7em; widht: 14.7em; line-height: 1.2em; width: 14.4em; }
   .ui-state-highlight { height: 1.5em; line-height: 1.2em; width: 14.4em; height: 7em;}
 
            img.displayed{display: block; margin-left: 0; margin-right: 0; margin: 0; width: 14.4em; height: 7em;}
            div.dz-image.dz-processing.dz-image-preview.dz-error.dz-complete{margin:-20; width:14.4em; height:7em;}
            img{margin:-43px; margin-left:-20px; width:14.4em;  min-width:100%; height:7em; min-height:100%;}
            button{margin:-43px; margin-left:-20px;}
              </style>
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
<a class="th"id="th" role="button" aria-label="Thumbnail" href="http://cosmo.kpedu.fi/~mathiasthlin/projekti/Projekti/template.php">
  <img aria-hidden=true src="http://www.ennenjanyt.net/wp-content/uploads/image/2008_2/huhmarniemi_kuva4.jpg"/>
  </a>
</li>
         
  <li class="ui-state-default">Kuva2
  <form action="/file-upload" class="dropzone dz-clickable displayed" id="kab">
        </form></li>
  
  <li class="ui-state-default">Kuva3
<form action="/file-upload" class="dropzone dz-clickable displayed" id="kac">
      </form></li>

  <li class="ui-state-default">Kuva4
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