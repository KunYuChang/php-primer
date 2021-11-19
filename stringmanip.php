<?php 
  $title = "string";
  include "./includes/header.php"
?>
<body>
  <?php
  // Concatenation of strings
    $phrase1 = "student who came late";
    $phrase2 = "in class, stand with Rock";
    $name = "trevoir williams";

    // 字串連接
    echo $phrase1 . ", named Tiffany, " . $phrase2 . '<br/>';
    echo '<hr/>';
    
    // 大小寫轉換
    echo 'Uppercase first letter: '. ucfirst($name) . '<br/>';
    echo 'Uppercase first letter of each word: '. ucwords($name) . '<br/>';
    echo 'Upper case:'. strtoupper($name).'<br/>';
    echo 'Lower case:'. strtolower("THIS WAS ALL UPPER CASE").'<br/>';
    echo '<hr/>';

    // 重覆、擷取、位置、長度
    echo 'Repeat String: ' . str_repeat('R', 10) . '<br/>';
    echo 'Get a Substring: ' . substr($name, 3, 5) . '<br/>';
    echo 'Get position of string: ' . strpos($name, 'w'). '<br/>';
    echo 'Find Length of String:' . strlen($name) . '<br/>';
    echo 'Replace string with another:'. str_replace("stand", "sit", $phrase2). '<br/>';
    echo '<hr/>';

    // 去除空白
    echo 'Trim spaces on both sides: ' . "Hello" . trim("   World   ") . "!" . "<br/>";
    echo 'Trim spaces to the left: ' . "Hello" . ltrim("   World   ") . "!" . "<br/>";
    echo 'Trim spaces to the right: ' . "Hello" . rtrim("   World   ") . "!" . "<br/>";
    echo '<hr/>';

  ?>
<?php include "./includes/footer.php"?>