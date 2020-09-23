<?php
//memanggil file function.php pakai perintah require
require("../function/function.php");

?>
 <!DOCTYPE html>
 <html>
    <head>
      <?php 
      head();
      ?>
    </head>
 <body>
  <?php 
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'beritax');
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
   ?>
    <div id="wrapper">
        <header>
            <?php get_header(); ?>
        </header>
        <menu>
            <?php get_menu(); ?>
        </menu>
        <article>
            <?php get_home(); ?>
        </article>
        <footer>
            <?php get_footer(); //memanggil fungsi footer?>
        </footer>
    </div>
 </body>
 </html>