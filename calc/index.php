<?php
    $title = "Php Calculator";
    $ziv = "<i>ThatZiv</i>";
?>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="PHP Calc by ThatZiv">
    <meta name="author" content="Zavaar Shah">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
  <body>
      <br>
      <center>
  <div id="container">
      <div id="header">
     <h>
     <?php echo $title; ?>
     </h>
    </div>
   
  
    <hr>
    <h2>PHP Calculator by <?php echo $ziv; ?></h2>
    <form>
        <input type="text" name="num1" placeholder="1st Number">
        <select name="operation">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>

</select>
        <input type="text" name="num2" placeholder="2st Number">
       
        <button type="submit" name="submit" value="submit">Calculate!</button>
        
    </form>

<p>Answer:<p> <strong>
<?php

    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operation = $_GET['operation'];
        switch ($operation) {
            case "None":
                echo "Select an operation!";
            break;
            case "Add":
                echo $result1 + $result2;
            break;
            case "Subtract":
                echo $result1 - $result2;
            break;
            case "Multiply":
                echo $result1 * $result2;
            break;
            case "Divide":
                echo $result1 / $result2;
            break;
        }
        }

    

?>
</strong>
  
  
  </div>
  <p style="color:black;text-align:center;">
      Copyright &copy; <a href="https://github.com/thatziv"><?php echo $ziv; ?></a>
    </p>
    </div>
  
  </body>
</html>