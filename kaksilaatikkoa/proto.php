<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="dropzone.css">
<link rel="stylesheet" href="2box.css">
        <title>dropzone</title>
        <meta charset="UTF-8">
        <script>
            $(function() {
              $( "#sortable" ).sortable();
              $( "#sortable" ).disableSelection();
            });
        </script>

    </head>

    <body>
<!-- dropzone laatikot  -->
<ul id="sortable">
  <li class="ui-state-default">
      <form action="/file-upload" class="dropzone dz-clickable displayed" id="kaa">
      </form>
  </li>
  <li class="ui-state-default">
      <form action="/file-upload" class="dropzone dz-clickable displayed" id="kab">
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

</html>
