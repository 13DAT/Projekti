<ul id="sortable">
  <li class="ui-state-default">
      <form action="/file-upload" class="dropzone" id="kaa">
      </form>
  </li>
  <li class="ui-state-default">
      <form action="/file-upload" class="dropzone" id="kab">
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

</script>