<html>
  <head>
    <meta charset="UTF-8">
    <title>Fullscreen Prototype 4</title>
  </head>
  <body>
    <header>
    <h1> Fullscreen Prototype 4 </h1>
    <p><strong> Code: </strong>Juho Petäjistö</p>
    <p><strong> Source: </strong>https://stackoverflow.com/ </p>
    </header>
	<style>
	#container:-webkit-full-screen,
	#container:-moz-full-screen,
	#container:-ms-fullscreen,
	#container:fullscreen {
    width: 100vw;
    height: 100vh;
    }
	#container{
    border:1px solid red;
    border-radius: .5em;
    padding:10px;
    }
	img
	{
	width: 100%;
	height: auto;
	}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<a href="#" id="toggle_fullscreen">Toggle Fullscreen</a>
	<p>I will be fullscreen!</p>
<div id="container">
  <p>
	<img src="https://wallpaperscraft.com/image/blocks_rainbow_3d_graphics_background_76559_3840x2160.jpg" width="1440" height="700">
	</p>
</div>
	<script>
	$('#toggle_fullscreen').on('click', function(){
  // if already full screen; exit
  // else go fullscreen
  if (
    document.fullscreenElement ||
    document.webkitFullscreenElement ||
    document.mozFullScreenElement ||
    document.msFullscreenElement
  ) {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  } else {
    element = $('#container').get(0);
    if (element.requestFullscreen) {
      element.requestFullscreen();
    } else if (element.mozRequestFullScreen) {
      element.mozRequestFullScreen();
    } else if (element.webkitRequestFullscreen) {
      element.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    } else if (element.msRequestFullscreen) {
      element.msRequestFullscreen();
    }
  }
});
	</script>
  </body>
</html>