<style>
            #sortable { list-style-type: none; margin: 0; padding: 0; width: 4500px; }
            #sortable li {margin: 3px 3px 3px 0; float: left; width: 1440px; height: 700px; font-size: 1em; text-align: center;}
			img.displayed{display: block; margin-left: 0; margin-right: 0; margin: 0; width: 1440px; height: 700px;}
			div.dz-image.dz-processing.dz-image-preview.dz-error.dz-complete{margin:-20; width:1440px; height:700px;}
			
</style>


<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


        
        <meta charset="UTF-8">
        
        <script>
            $(function() {
              $( "#sortable" ).sortable();
              $( "#sortable" ).disableSelection();
            });
        </script>

    </head>

    <body>
<ul id="sortable">
  <li class="ui-state-default">
      <form action="/file-upload" class="dropzone dz-clickable displayed" id="kaa">
      </form>
  </li>
</ul>
    </body>
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