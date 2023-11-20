<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

$answer1 = $a+$b;
$answer2 = $a-$b;
$answer3 = $a*$b;
$answer4 = $a/$b;
$answer5 = $a%$c;
$answer6 = $a/=$d;
$answer7 = $c+=$d;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo $answer5;
echo "<br />";
echo $answer6;
echo "<br />";
echo $answer7;
echo "<br />";
echo "<br />";
$a = 20;
$b = 5;
echo  "比較";
echo "<br />";
echo ($a > $b);
echo "<br />";

echo "論理演算";
$a = 20;
$b = 5;

$answer8 = $b*2;
$answer9 = $b*6;
echo "<br />";
$answer10 = $a > $answer8;
$answer11 = $a < $answer9;
echo ($answer10 and $answer11);
echo "<br />";

$a = $b = 10;
$c = $d = 5;



echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;
echo "<br />";
echo $b;
echo "<br />";
echo $d;