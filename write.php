<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $myfile = fopen("test.txt", "w") or die("Unable to open file!");
      $first = $_GET['first'];
      $second = $_GET['second'];

      fwrite($myfile, $_GET['first']);
      fwrite($myfile, chr(13).chr(10));
      fwrite($myfile, $_GET['second']);
      fclose($myfile);
    ?>
  </body>
</html>
