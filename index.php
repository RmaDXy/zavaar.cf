<!-- Made by Zua (Zavaar Shah) @ https://github.com/thatziv -->
<!DOCTYPE html>
<html>
<?php include 'inc/core.php' ?>
  <?php include 'inc/header.php'; ?>
  <body>
    <!-- preloader -->
    <?php include 'inc/preloader.php'; ?>
    <!-- NAV (mobile too) -->
        <?php include 'inc/nav.php'; ?>
          <!-- NAV end-->

          <!--START OF PAGE CONTENT (Container)-->
    <div class="container center">
        <h1 style="color: white">WELCOME TO MY SITE</h1>
        <br \>
        <img src='images/zua.png'>
        <br \>
        
    
       
       
        
     <br>
        <p1>Hello, My name is <a href="https://instagram.com/that.ziv/">Zavaar Shah</a>, but my friends call me <b>Ziv</b> <br>and I like to <i>create</i> things with code</p1>, especially this site.
            <br>
            <i style='font-size: 60px;'class="material-icons">code</i>
            <br>
            <!-- Info Card -->
              <hr>
              <h4>LINKS</h4>
              
         <center>
           
            <div style="width: 75%;" class="card">
                <div style='background-color: rgb(44, 44, 44);' class="card-content">
                  <p>These are just some of my personal links for social media and such. Make sure to go check them out.</p>
                </div>
                <div style='color: rgb(17, 17, 17);' class="card-tabs">
                  <ul style='color: rgb(17, 17, 17);' class="tabs tabs-fixed-width">
                    <li class="tab blue"><a style='color: rgb(243, 242, 242);' href="https://github.com/thatziv"><i style='font-size: 13px;' class="material-icons">code</i> Github</a></li>
                    <li class="tab blue"><a style='color: rgb(243, 242, 242);' href="https://twitch.tv/zuacp"><i style='font-size: 13px;' class="material-icons">videocam</i>twitch</a></li>
                    <li class="tab blue"><a style='color: rgb(243, 242, 242);' href="https://www.youtube.com/channel/UCjAu7aRli_GePQb4FnzRRWg"><i style='font-size: 13px;' class="material-icons ">ondemand_video</i> YouTube</a></li> 
                    <li class="tab blue"><a style='color: rgb(243, 242, 242);' href="https://instagram.com/that.ziv"><i style='font-size: 13px;' class="material-icons">camera_alt</i> Instagram</a></li> 
                  </ul>
                 
                </div>
              </div>
              </center>
            <br>
            <!-- Info Card end -->
            <h4>NEWS</h4>
            <i style='font-size: 60px;'class="material-icons">subject</i>
            <script>
            try {
            // GET req to my personal 'news' api
            $.get("http://thatziv.ddns.net:9999/api", {"Content-Type": "application/json"}, function( data ) {
              
              $("#news").append(`${data.text}`);
            });

            } catch (err) {
              $("#news").append(`An Error Occurred with getting the news. `);
            }
            </script>      
            <div id="news" class='gr'>
            </div>
<br />
            <hr> <!-- Poorly written...  -->
            <h4>NAVIGATION</h4>
            <div id="but">
            <a href='activity.php' class="waves-effect waves-light btn-large pulse red accent-3"><i class="material-icons left">panorama_fish_eye</i><b>NEW: </b>Live Activity</a>
            </div>
            <div id="but">
            <a href='/' class="waves-effect waves-light btn-large blue"><i class="material-icons left">folder_open</i>Index</a>
            </div>
            <div id="but">
            <a href='portfolio.php' class="waves-effect waves-light btn-large blue"><i class="material-icons left">card_travel</i>Portfolio</a>
            </div>
            <div id="but">
            <a href='contact.php' class="waves-effect waves-light btn-large blue"><i class="material-icons left">contacts</i>Contact</a>
            </div>
           <?php include 'inc/up.php'; ?>
            </div>



    </body>
</html>