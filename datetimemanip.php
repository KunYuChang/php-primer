<?php 
  $title = "Date and Time Manipulation";
  include "./includes/header.php"
?>
  <h1>Date and Time Manipulation</h1>

  <?php
    $datenow = getdate();
    echo "Today's Date: <br/>";
    echo $datenow['mday'] . '<br/>';
    echo $datenow['mon'] . '<br/>';
    echo $datenow['year'] . '<br/>';

    echo "Today's Date: " . $datenow['year'] . "/" . $datenow['mon'] . "/" . $datenow['mday']. '<br/>';

    // Time
    date_default_timezone_set("Asia/Taipei");
    echo time().'<br/>';

    print date('Y/m/d/ H:m:s<br>', time()) . '<br/>';
  ?>

<?php include "./includes/footer.php"?>