<!-- Made by Zua (Zavaar Shah) @ https://github.com/thatziv -->
<!DOCTYPE html>
<html>
  <?php include 'inc/header.php'; ?>
  <body>
    <!-- preloader -->
    <?php include 'inc/preloader.php'; ?>
    <!-- NAV (mobile too) -->
        <?php include 'inc/nav.php'; ?>
          <!-- NAV end-->
          <body>
            <div class="container">

              <?php 
    if (isset($_SESSION['u_id'])) {
        $name = $_SESSION['u_uid'];
        echo "<h2>Welcome <b>$name</b>.</h2><hr class='left'><br>";
        $currentContent = '
      <h4 class="gr">Thanks for Signing up!</h4> <p class="gr">The <b>Zua API</b> or <i>Zua Application programming interface</i> is a WIP project of <a href="https://github.com/thatziv">Ziv’s</a> that has gained a lot of support from <a href="#sponsors">Sponsors</a> and Investors. This API is written entirely in <b>JavaScript</b> with Node.JS using the Express.JS framework and will power a lot of web applications in the future. I would like to specially thank all the people that invested in my project and the <a href="#sponsors">Sponsors</a><br>
        <b>The Zua API is now in its first stages as the <a href="https://discordbots.org/bot/482995367059652608">Note Bot</a> has been created and powered by the Zua API. This bot can create, view, delete Notes created by any user.</b></p><br>
      ';
      echo $currentContent;
      echo '<form action="inc/logout-inc.php" method="POST">
            <button type="submit" name="submit" class="waves-effect waves-light btn-large blue">Logout <i class="material-icons right">sync</i></button>
            </form>';
    echo '
    <div class="center">
        <h3 class="blu">ZUA API SAMPLES</h3>
        <p2 class="gr"><b>NOTE:</b> This is all a work in progress and may still take a long time to be fully operational.</p2>
        <br>
        <br>
        <a class="btn waves-effect waves-light blue" href="http://thatziv.ddns.net:9999/api">Main<i class="material-icons right">code</i></a>
        <br><br>
        <a class="btn waves-effect waves-light blue" href="random/">Number Generator<i class="material-icons right">call_merge</i></a>
        <br><br>
        <a class="btn waves-effect waves-light blue" href="quadratics/">Quadratics<i class="material-icons right">graphic_eq</i></a>
        <br><br>
        <a class="btn waves-effect waves-light blue" href="clock/">Clock<i class="material-icons right">access_alarm</i></a>
        <br><br>
        <a class="btn waves-effect waves-light blue" href="https://github.com/ThatZiv/webpanel/">Webpanel<i class="material-icons right">web</i></a>
        <br><br>
        <hr>
        <h3 id="sponsors" class="blu">SPONSORS</h3>
        <img class="img" src="img/razer.png"><br><br><br>
        <img class="wide"src="img/roge.png">
        <br><br><br>
         <div class="collection">
    <a href="http://zavaar.cf" class="collection-item">Use Code <b>Lifted</b></a>
  </div>
    </div>
';
    } else {
      echo '<h3>Log In</h3>
            <div class="nav-login">
                      <form action="inc/login-inc.php" method="POST">
                        <input class="wh" type="text" name="uid" placeholder="Username/Email">
                        <input class="wh" type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="submit" class="waves-effect waves-light btn blue">Log In <i class="material-icons right">send</i></button>
                        <a href="signup.php" class="waves-effect waves-light btn blue">Sign Up<i class="material-icons right">add</i></a>
                      </form>
                  </div>';
    }
  ?>

            
                    <!--  -->
                      </div>
        </body>

  <?php include 'inc/core.php' ?>
 
    </body>
</html>