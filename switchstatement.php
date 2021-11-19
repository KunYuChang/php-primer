<?php 
  $title = "Switch Statements";
  include "./includes/header.php"
?>
<body>
  <h1>Switch Statements</h1>
  <?php
    $grade = 'A';

    switch($grade) {
      case 'A':
        echo '<h2>YOU ARE SUPERSTAR!</h2>';
        break;
      case 'B':
        echo '<h2>YOU DID WELL!</h2>';
        break;
      default:
        echo '<h2>YOU ARE FAILED...</h2>';
        break;
    }
  ?>
<?php include "./includes/footer.php"?>