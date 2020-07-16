<?php
//输入数组，数组的元素只有1，2，3，但是可能存在多个1，2，3，
//现在需要输出按照先排2，再排3，最后排1的顺序的数组

$arr = [2 ,2 ,3,3,1,2];

//获取是2的所有数组
$arr2 =[2];
$result2 = array_intersect($arr,$arr2);

$arr3 = [3];
$result3 = array_intersect($arr,$arr3);

$arr1 = [1];
$result1 = array_intersect($arr,$arr1);

//合并
$result = array_merge($result2,$result3,$result1);

exit;
$arr = array_count_values($arr);
$arr_2 = [];
for($i = 0 ; $i<$arr[2];$i++){
    $arr_2[] = 2;
}
for($i = 0 ; $i<$arr[3];$i++){
    $arr_2[] = 3;
}
for($i = 0 ; $i<$arr[1];$i++){
    $arr_2[] = 1;
}


