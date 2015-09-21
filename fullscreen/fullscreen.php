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