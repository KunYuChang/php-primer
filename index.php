<?php 
  $title = "index";
  include "./includes/header.php"
?>

<!-- Basic HTML -->
<h1>Hello HTML - PHP Primer</h1>
<br>

<?php
  //Printing to HTML using echo
  echo 'Hello PHP!';
  echo '<br/>';
  echo 'Second Line';
  echo '<br/>';  
?>

<?php
  // declare variable
  $name = 'Trevoir Wolliams';
  $age = 21;
  // echo variable
  echo $name;
  echo '<h1>My Name Is: '.$name.'</h1>';
  echo '<h1>My Name Is: '.$age.'</h1>';
  echo "<h1>My Name Is: $name</h1>";
?>

<button>The Btn!</button>

<?php include "./includes/footer.php"?>

