<!-- Made by Zua (Zavaar Shah) @ https://github.com/thatziv -->
<!-- I had to keep all INCs embeded in this file itself due to dependancies errs -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <title>Ziv.</title>
  <meta name="author" content="Zavaar Shah">
  <meta name="description" content="Zavaar Shah's Portfolio">
  <meta name="keywords" content="Zua,Thatziv,Portfolio,Zavaar,Shah">
  <meta name="theme-color" content="#202020">
  <meta property="og:site_name" content="Ziv.">
	<meta property="og:url" content="http://zavaar.cf">
	<meta property="og:image" content="images/zua.png">
	<meta property="og:title" content="Ziv's Website">
  <meta property="og:type" content="website">
  <meta name="url" content="http://zavaar.cf">
  <style>
  /* Made by Zua (Zavaar Shah) @ https://github.com/thatziv */
/* Alot of this was just for testing but im still leaving it here */

body {
    background-color: #202020;
    color: white;
    font-weight: 500;
}

hr {
    width: 75%;
}

#but {
    padding-top: 23px;
}

.spinner-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #008cff;
    z-index: 999999;
    }

.spinner {
position: absolute;
top: 48%;
left: 48%;
}

.progress {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
   
    width: 50%;
}

#footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
}

footer {
    text-align: center;
    position: absolute;
    bottom: 10px;
    width: 50%;
}

.pagination {
    bottom: 0;
}

#bottom {
    bottom: 1.5vh;
}

#linkCard {
    background-color: #363636;
    color: rgb(211, 211, 211);
}

img {
    width: 150px;
    height: 150px;
}

#container {
    padding: 25px;
    float:left;
}

.gr {
    color: rgb(180, 180, 180);
}

.blackTxt {
    color: rgb(29, 28, 28);
}

.darkBlu {
    color: #06567e;
}

  </style>

  </head>

  
  <body>
    <!-- preloader -->
    <div class="spinner-wrapper">
      <center>
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
      </center>
    </div>
    <!-- NAV (mobile too) -->
    <nav>
                <div class="nav-wrapper blue">
                  <a href="/" class="brand-logo">Z I V</a>
                  <a href="#" data-target="mobile-demo" class="sidenav-trigger blue"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="/">Index</a></li>
                    <li><a href="http://status.zavaar.cf">Status</a></li>
                    <li><a href="/api/">API</a></li>
                    <li><a href="https://discord.gg/yWddFpQ">Discord</a></li>
                  </ul>
                </div>
              </nav>
              
              <ul class="sidenav" id="mobile-demo">
                   <li><a href="/">Index</a></li>
                    <li><a href="http://status.zavaar.cf">Status</a></li>
                    <li><a href="/api/">API</a></li>
                    <li><a href="https://discord.gg/yWddFpQ">Discord</a></li>
              </ul>
          <!-- NAV end-->

          <!--START OF PAGE CONTENT (Container)-->
    <div class="container center">
        <h1 style="color: white">404 Not Found</h1>
        <i style='font-size: 60px;'class="material-icons">visibility_off</i>
        <br>
        <hr>
     <br>
        <h6>Unfortunately, The thing you are looking for doesn't exist.</h6>

            <br>
            <br>
              <a href='/' class="waves-effect waves-light blue btn-large"><i class="material-icons left">home</i>Home Page</a>
            </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script>
// init side nav 
$(document).ready(function(){
    $('.sidenav').sidenav();
  });
//Preloader
$(window).on("load", function() {
fadeout = 875;
function hidePreloader() {
var preload = $('.spinner-wrapper');
preload.fadeOut(fadeout);
}
hidePreloader();
});


</script>
 
    </body>
</html>