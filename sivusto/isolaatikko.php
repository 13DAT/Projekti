       <script>
            $(function() {
              $( "#boxi" ).disableSelection();
            });
        </script>

    </head>

    <body>
<!-- dropzone laatikot  -->
<div id="laatikko">
  <div class="ui-priority-primary">
      <form action="/file-upload" class="dropzone dz-clickable displayed" id="kaa">
      </form>
  </div>
</div>
    </body>
<!-- estää kuvien stackaamisen "poistamalla" edellisen kuvan -->
     <script src="http://cosmo.kpedu.fi/~jonatanlogland/projekti/Projekti/sivusto/dropzone.js"></script>
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