<?php 

//課題1：引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function product($value) {
    $result = $value * 2;
    return $result;
}

echo product(10);
echo "\n";


//課題2：$a と $b を仮引数に持ち、$aと$bを足した結果を返す関数を作成してください。
function sum($a, $b){
    $result = $a + $b;
    return $result;
}

echo sum(1, 2);
echo "\n";


/*課題3：.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を
渡すとその要素をすべてかけた結果を返す関数を作成してください。 */

function product2($arr) {
    $result = 1;
    
    for($i = 0; $i < count($arr); $i++) {
        $result *= $arr[$i];
    }
    
    return $result;
}

$arr = array(1, 3, 5, 7, 9);
echo product2($arr);
echo "\n";


/*課題4：【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array 
という関数を実装しようとしています。途中の部分を完成させてください。 */
function max_array($arr) {
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number < $a) {
            $max_number = $a;
        }
    }
    
    return $max_number;
}

$arr = array(3, 5, 7, 4, 2, 8, 6);
echo max_array($arr);
echo "\n";


//課題5-1 strips_tag関数の使用
$str = "<h1>strips_tag関数は</h1>" . "<p>タグを取り除く</p>";

echo $str;
echo "\n";

echo strip_tags($str);
echo "\n";


//課題5-2 array_push関数の使用
$arr = array("apple", "banana", "orange");
foreach($arr as $a) {
  echo $a . " ";
}
echo "にarray_push関数を適用して";
echo "\n";

array_push($arr, "peach", "cherry") ;
foreach($arr as $a) {
    echo $a . " ";
}
echo "に変化する";
echo "\n";


//課題5-3 array_merge関数の使用
$arr1 = ["apple", "banana", "orange"];
$arr2 = ["peach", "cherry"];
$arr3 = ["grape"];

$arr_merge = array_merge($arr1, $arr2, $arr3);

foreach($arr_merge as $a) {
    echo $a . " ";
}
echo "\n";


//課題5-4 time, mktime関数の使用
date_default_timezone_set("Asia/Tokyo");

echo time();
echo "\n";

echo mktime(0, 0, 0, 5, 22, 2020);
echo "\n";


//課題5-4 date関数の使用
echo date("Y/m/d");
echo "\n";

echo date("Y年m月d日 H時i分s秒");
echo "\n";

echo date("Y年m月d日 H時i分s秒", 1590105600);

echo "\n";

?>