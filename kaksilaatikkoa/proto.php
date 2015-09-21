
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
        <title>dropzone</title>
        <meta charset="UTF-8">
        <style>
            #sortable { list-style-type: none; margin: 0; padding: 0; width: 4500px; }
            #sortable li {margin: 3px 3px 3px 0; float: left; width: 720px; height: 700px; font-size: 1em; text-align: center;}
            img.displayed{display: block; margin-left: 0; margin-right: 0; margin: 0; width: 800px; height: 600px;}
            div.dz-image.dz-processing.dz-image-preview.dz-error.dz-complete{margin:-20; width:800px; height:600px;}
            img{margin:-20px; margin-left:-60px; width:720px;  min-width:100%; height:700px; min-height:100%;}
        </style>
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
  <li class="ui-state-default">
      <form action="/file-upload" class="dropzone dz-clickable displayed" id="kab">
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

</html>
