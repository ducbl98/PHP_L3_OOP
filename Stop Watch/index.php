<?php
set_time_limit(1000);
use JetBrains\PhpStorm\Pure;

include_once "StopWatch.php";
#[Pure] function selection_sort($data)
{
    for ($i = 0; $i < count($data) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$j] < $data[$min]) {
                $min = $j;
            }
        }
        $data = swap_positions($data, $i, $min);
    }
    return $data;
}

function swap_positions($data1, $left, $right)
{
    $backup_old_data_right_value = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left] = $backup_old_data_right_value;
    return $data1;
}

$my_array = [];
for($i=0;$i<100000;$i++){
    array_push($my_array,rand(-1000,10000));
}
//echo "Mảng ban đầu: <br>";
//echo implode('; ', $my_array);
$timeCount =new StopWatch();
$timeCount->start();
$sort_array=selection_sort($my_array);
$timeCount->stop();
echo $timeCount->getElapsedTime();
//echo "<br>Mảng đã qua sắp xếp:<br>";
//echo implode(', ', selection_sort($my_array)) . PHP_EOL;