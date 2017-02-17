<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="player.css"/>
</head>
  <body>
    <h3>Top Scorers in the NHL</h3>
    <table>
      <tr>
        <td class="topRow">Player Name</td><td class="topRow">Team</td>
        <td class="topRow">Goals</td><td class="topRow">Assists</td>
        <td class="topRow">Points</td>
      </tr>
<?php
  define ("PLAYER", "players.txt");

  function readFromFile()
  {
    $info = array();
    $handle = fopen(PLAYER, "r");
    $linesCount = 1;
    if($handle)
    {
      while($linesContent = fgets($handle))
      {
        $players = explode("\n", $linesContent);
        $info = array();

        foreach ($players as $str)
        {
          $info[] = explode(",", $str);
        }
        for($i = 0, $j=0, $k = 1, $l = 2, $m =3, $n = 4; $i<count($str); $i++)
        {
          $points = $info[$i][$l] + $info[$i][$m];
          echo "<tr><td>{$info[$i][$j]} {$info[$i][$k]}</td><td>{$info[$i][$n]}</td><td>{$info[$i][$l]}</td><td>{$info[$i][$m]}</td><td>{$points}</td></tr>";
        }
      }
      fclose($handle);
    }
    else
    {
      echo "ERROR opening file: " . PLAYER . "<br>";
    }
  }
  readFromFile();
?>
</table>
<body>
</html>
