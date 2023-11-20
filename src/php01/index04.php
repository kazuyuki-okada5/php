<?php
$a = 9;

if ($a === 5) {
echo "\$aは5です";
}else{
echo "\$aは５以外です";
}
echo "<br />";
if ($a === 5){
echo "\$aは5です";
}elseif ($a === 7){
echo "\$aは7です";
}else{
echo "\$aは5か7以外です";
}
echo "<br />";
$people = "taro";

switch ($people){
case "taro";
echo "太郎です";
break;
case "jiro";
echo "二郎です";
break;
case "saburo";
echo "三郎です";
break;
}
echo "<br />";
$a = 7;
$b = ($a>5) ? "TRUE" : "FALSE";
echo $b;