<?php 
  $title = "Functions";
  include "./includes/header.php"
?>
  <h1>Functions</h1>

  <?php
    // Defining a Function
    function writeMessage() {
      echo "You are really a nice person, Have a nice time!";
    }

    // Calling a Function
    writeMessage();

    // Functions with parameters
    function addFunction($num1, $num2) {
      $sum = $num1 + $num2;
      echo "The sum of $num1 and $num2 is: $sum <br/>";
    }

    addFunction(10,20);

  ?>

<?php include "./includes/footer.php"?>