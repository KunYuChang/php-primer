<?php 
  $title = "If Statement";
  include "./includes/header.php"
?>
  <?php
    // An If statement that will carry out an action based on the value of the variable.

    echo '<h2>If Statement</h2>';

    $grade = 80;

    // ===, ==, >, <, <=, >=
    if($grade >=50) {
      echo '<h3 style="color: red">YOU HAVE PASSED</h3>';
    } else {
      echo '<h3>YOU HAVE FAILED</h3>';
    }

    // 替代語句的寫法
    $grade = 'A';
    if ($grade == 'A'):
      echo '<h2>YOU ARE A SUPERSTAR!</h2>';
    elseif ($grade == 'B'):
      echo '<h2>YOU DID WELL!</h2>';
    else:
      echo '<h2>YOU HAVE FAILED...</h2>';
    endif;
  ?>
<?php include "./includes/footer.php"?>