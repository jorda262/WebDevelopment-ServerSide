<html>
<head>
  <?php
    function linker($url, $type)
    {
      $string = "<a href = '$url'/>$type</a>";
      return $string;
    }
    $var = linker($_POST["url"], $_POST["type"]);
    echo $var;
   ?>
  </head>
</html>
