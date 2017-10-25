<?php
 require_once ("includes/head.php");
 ?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Moustafa Elsisy</title>
    <?php
      echo $GLOBAL_HEAD;
      echo '
      <link rel="stylesheet" type="text/css" href="'.getCSS(__FILE__).'">
      <script src="'.getJS(__FILE__).'" type="text/javascript"></script>';
    ?>
  </head>
  <body>
    <div class="container" style="
    width: 100%;
">
    <div class="row" style="
    text-align: center;
">
        <div class="col-xs-6" style="
    background-color: #374353;
    color: #fff;
    padding: 5rem;
">
    <h3 style="
    font-weight: 600;
">COMP 2001</h3>
    <p>Introduction to Programming in Java: The course introduces programming in the Java language, along with some data structures, such as Linked Lists, and introduces GUI development using the swing library. It also covers a lot of aspects of OOP in Java, including Interfaces, Nested Classes, Polymorphism and Inheritance</p>
</div>
        <div class="col-xs-6">COMP 2002</div>
    </div>
</div>
  </body>
</html>
