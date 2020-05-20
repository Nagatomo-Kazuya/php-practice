<?php

//課題1
$name = "長友和也";
if ($name == "長友和也") {
    echo $name . "はあなたの名前です";
} else {
    echo $name . "はあなたの名前ではありません";
}
echo "\n";

//課題2
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";


//課題3
$fruits = ["apple", "banana", "cherry", "orange", "peach"];
foreach ($fruits as $kudamono) {
 echo $kudamono . "  ";
}
echo "\n";


//課題4
$start = 1;
$end =100;

for($i = $start; $i <= $end; $i++) {
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}