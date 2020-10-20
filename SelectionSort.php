<?php
function selectionSort($list){
    for($i = 0; $i < count($list) -1; $i++){
        $max = $i;
        for ($j = $i + 1; $j < count($list); $j++){
            if($list[$j] > $list[$max]){
                $max = $j;
            }
        }
        $temp = $list[$i];
        $list[$i] = $list[$max];
        $list[$max] = $temp;
    }
        return $list;
}

$listTest = [1,3,6,3,3,32,5,46,23,5,32,54,32,6,23,65,3,87,42,87];
print_r(selectionSort($listTest));