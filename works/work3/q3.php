<?php

// 配列を引数として受け取り、その配列内の数値の平均値を計算して返す関数を完成させなさい

$value = array(1, 2, 3, 4, 5);
$result = average($value);
echo "平均値: " . $result . "\n";

function average($values)
{   
    for ($i = 1; $i < count($values); $i++)
    {
        echo "$values";
    }
}
