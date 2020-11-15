<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

//echo "testing still </br>";
//table open
echo "<table style = 'width:100%'; border: 1px solid black;>";
//echo "<tr> hello </tr>";
//open tr
echo "<tr border = '1'>";
echo "<th>[]</th>";
for($i = 1;$i <= 100; $i++){
  echo "<th>$i</th>";
}
echo "</tr>";
for($j = 1;$j <= 100; $j++){
  //echo "<td>$j</td>";
  echo "<tr>";
  echo "<td>$j</td>";
  for($k = 1;$k <= 100; $k++){
    //echo "<td>$j</td>";
    echo "<td> " . $j * $k . "</td>";
  }
  echo "</tr>";
}
echo "</tr>";
//todo:fix styling
//table close
echo "</table>";
?>
