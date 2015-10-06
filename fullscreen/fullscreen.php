<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  
  <meta name="description" content="jQuery fullsizable Example" />
  <meta name="author" content="Matthias Schmidt - http://m-schmidt.eu" />
  <style type="text/css" media="screen">
    #container {
      min-height: 1000px;
    }
  </style>
  <link rel="stylesheet" href="http://cosmo.kpedu.fi/~erkkasailynoja/bower/bower_components/jquery-fullsizable/css/jquery-fullsizable.css" />
  <link rel="stylesheet" href="http://cosmo.kpedu.fi/~erkkasailynoja/bower/bower_components/jquery-fullsizable/css/jquery-fullsizable-theme.css" />
    <style type="text/css" media="screen">
    #fullsized_go_prev, #fullsized_go_next, #fullsized_close, #fullsized_fullscreen {
      position: absolute;
      top: 50%;
      display: block;
      width: 30px;
      height: 30px;
      background-color: red;
    }
    #fullsized_go_prev {
      left: 25px;
    }
    #fullsized_go_next {
      right: 25px;
    }
    #fullsized_close {
      top: 0;
      right: 0;
    }
    #fullsized_fullscreen {
      top: 0;
      right: 40px;
      background-color: green;
    }
    :fullscreen #fullsized_fullscreen { background-color: blue; }
    :-webkit-full-screen #fullsized_fullscreen { background-color: blue; }
    :-moz-full-screen #fullsized_fullscreen { background-color: blue; }
  </style>
  <script src="http://cosmo.kpedu.fi/~erkkasailynoja/bower/jquery172.js"></script>
  <script src="http://cosmo.kpedu.fi/~erkkasailynoja/bower/bower_components/jquery-fullsizable/js/jquery-fullsizable.js"></script>
  <script>
    $(function() {
      $('a').fullsizable({
        detach_id: 'container',
        clickBehaviour: 'next'
      });
    });
  </script>
</head>
  <body>
  <h1>jQuery.fullsizable</h1>
<button><a href="http://i.imgur.com/LVYDgNw.jpg" class="fancybox" rel="gallery-1" alt="open gallery"><img src="http://the.url.of/your/button.png"/></a></button> 
 <img src="http://i.imgur.com/LVYDgNw.jpg">
   <a href="http://img1.wikia.nocookie.net/__cb20140609003945/incredible-crew/images/3/38/Twerk.gif">
      <img title="Icebergs in the High Arctic"
            alt="”The debris loading isn't particularly extensive, but the color is usual.”"
            src="http://img1.wikia.nocookie.net/__cb20140609003945/incredible-crew/images/3/38/Twerk.gif">
    </a>
    <a href="http://2.bp.blogspot.com/-H2lbv15f2X8/VEqIvDoAa5I/AAAAAAAAAEc/5RPIicE4KBM/s1600/Lisa-Ann-TheLisaAnn.com_.jpg">
      <img title="Huorra"
            alt="Xysticus cristatus, A Estrada, Galicia, Spain"
            src="http://2.bp.blogspot.com/-H2lbv15f2X8/VEqIvDoAa5I/AAAAAAAAAEc/5RPIicE4KBM/s1600/Lisa-Ann-TheLisaAnn.com_.jpg">
    </a>
    <a href="https://lh3.googleusercontent.com/-49LWhpN0s3k/VOiQYP51bDI/AAAAAAAAANQ/Je0mO5u7efI/s630-fcrop64=1,00420000ffbcd5a6/10378206_791478980944361_672948458537634199_n_resized.png">
      <img title="Huorra"
            alt="Xysticus cristatus, A Estrada, Galicia, Spain"
            src="https://lh3.googleusercontent.com/-49LWhpN0s3k/VOiQYP51bDI/AAAAAAAAANQ/Je0mO5u7efI/s630-fcrop64=1,00420000ffbcd5a6/10378206_791478980944361_672948458537634199_n_resized.png">
        </a>
		
   
  </div>
</body>
</html>
