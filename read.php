<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $myfile = fopen("test.txt", "r") or die("Unable to open file!");

      for ($i = 0; !feof($myfile); $i++) {
        $data[$i] = fgets($myfile);
      }
      for ($i=0; $i < sizeof($data); $i++) {
        echo $data[$i];
        echo nl2br("\n");
      }
      fclose($myfile);
    ?>
  </body>
</html>
