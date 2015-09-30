    <head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="bigbox.css">

       
    </head>

    <body>
<!-- dropzone laatikot  -->
<ul id="sortable">
  <li class="ui-state-default">
      <form action="/file-upload" class="dropzone dz-clickable displayed" id="kaa">
      </form>
  </li>
</ul>
    </body>
<!-- estää kuvien stackaamisen "poistamalla" edellisen kuvan -->
     <script src="dropzone.js"></script>
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

</script>
<ul id="sortable">
  <li class="ui-state-primary active">
    <a class="th" id="th" role="button" aria-label="Thumbnail" href="http://cosmo.kpedu.fi/~mathiasthlin/projekti/Projekti/oikealaatikko.php"> 
     <img aria-hidden=true style="width:13.625em; height:6.250em;" src="http://cosmo.kpedu.fi/~anttitaipale/projekti/Projekti
     </a>
  </li>
</ul>