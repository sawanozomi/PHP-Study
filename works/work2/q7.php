<?php

// 各人の得点とその評価を表示するコードを書いてください。評価基準は以下とします:
// 90以上: "優"
// 80以上90未満: "良"
// 70以上80未満: "可"
// 70未満: "不可"

// 出力例 「johnの評価は良です」

$scores = array("John" => 85, "Jane" => 92, "Jim" => 78);

foreach ($scores as $key => $value){
    if ($value >= 90){
        $value = "優";
    }elseif ($value >= 80 && $value < 90){
        $value = "良";
    }elseif ($value >= 70 && $value < 80){
        $value = "可";
    }elseif ($value < 70){
        $value = "不可";
    }
    echo $key."の評価は".$value."です";
}