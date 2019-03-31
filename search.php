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
<style>

.input-field input:focus + label {
   color: blue !important;
 }
 /* label underline focus color */
 .row .input-field input:focus {
   border-bottom: 1px #2196F3 !important;
   box-shadow: 0 2px 0 0 #2196F3  !important
 }
</style>
          <!--START OF PAGE CONTENT (Container)-->
    <div class="container center">
        <h1 style="color: white">Google Search</h1>
        <hr id="gr">
     <br>


     <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          
          <label for="email">Search</label>
          <p id="pe"></p>
          <input style="color:white;" id="search" type="text" class="validate">
          <button onclick="search" href="https://www.google.com/search?q=" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">search</i></button>
         <script>
         var val = "google"
         function search() {
        var q = document.getElementById("search").value
        document.getElementById("search").href = q
          
      }
         </script>

        </div>
      </div>
    </form>
  </div>
        
           <?php include 'inc/up.php'; ?>
            </div>



    </body>
</html>