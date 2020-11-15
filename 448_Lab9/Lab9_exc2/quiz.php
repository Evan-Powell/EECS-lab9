<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$length = $_POST["length"];
$lifespan = $_POST["lifespan"];
$Call = $_POST["Call"];
$type = $_POST["type"];
$cool = $_POST["cool"];

echo "<p>test</p>";
//display correct answers
echo "<p>Question1: How Long Can Blue Whales Grow?<br>";
echo "You answered: $length<br>";
echo "The Correct answer was: 90+ Feet<p><br>";
//#2
echo "<p>Question2: How Long Can Bowhead Whales Live?<br>";
echo "You answered: $lifespan<br>";
echo "The Correct answer was: 200+ Years<p><br>";
//#3
echo "<p>Question3: How Far Away (under water) Can A Whale Call Be Heard?<br>";
echo "You answered: $Call<br>";
echo "The Correct answer was: 1000+ Miles<p><br>";
//#4
echo "<p>Question4: What Species of Whales (among others) are Currently Endangered or Threatened<br>";
echo "You answered: $type<br>";
echo "The Correct answer was: All of the Above<p><br>";
//#5
echo "<p>Question5: How Cool are Whales?<br>";
echo "You answered: $cool<br>";
echo "The Correct answer was: They are Very Cool, Indeed<p><br>";
//total
$total = 0;
if($length == "90+ Feet"){
  $total++;
}
if($lifespan == "200+ Years"){
  $total++;
}
if($Call == "1000+ Miles"){
  $total++;
}
if($type == "All of the Above"){
  $total++;
}
if($cool == "They are Very Cool, Indeed"){
  $total++;
}
$percent = $total * 20;
echo "<p>You got: $total out of 5 Correct: $percent%<p><br>";
?>
