

<html>
<head>
  <title></title>
</head>
<body>

<form method="GET" action="">
    <p>
        <label for="numbers">numbers</label>
        <input id="numbers" name="numbers" type="text">
    </p>
    <p>
        <input type="submit">
    </p>
</form>

</body>
</html>


<?php


//********CODE STARTS HERE********************
  // Get the input from user   
    if (isset($_GET['numbers']))
    {
      $numbers = $_GET['numbers'];
      // validate numbers
      if (is_numeric($numbers))
      {
        $sum = array_sum(str_split($numbers));
        echo "The Sum of all digits is " .  $sum;
      }
      else {
            echo "please enter a numeric number";
            }
      

    }
    else {
      echo "please enter a number";
    }

    

    ?>

    












