<?php 
  $title = "While";
  include "./includes/header.php"
?>
  <h2>While Loop</h2>
  <?php
    $grade = 0;
    // Infinite Loop
    // while($grade < 10) {
    //   echo '<p>I AM LESS THAN 10!</p>';
    // }

    while ($grade < 10) {
      echo '<p>I AM LESS THAN 10!</p>';
      $grade++;
    }    

    echo 'EXIT LOOP!';
  ?>


  <h2>Do-While Loop</h2>
  <?php
    // Post-Condition Loop 
    $grade = 0;
    do {
      echo '<p>I AM DO WHILE LOOP</p>';
    } while ($grade < 10);
    
    echo 'EXIT LOOP!';
  ?>
<?php include "./includes/footer.php"?>