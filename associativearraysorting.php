<?php
$fruits = array("tomato"=>"21","beans"=>"34","carrot"=>"25","cabbage"=>"2");
// asort($fruits);
// output:
// key=cabbage, value2
// key=tomato, value21
// key=carrot, value25
// key=beans, value34

// arsort($fruits);

// output:
// key=beans, value34
// key=carrot, value25
// key=tomato, value21
// key=cabbage, value2

// ksort($fruits);
// output:
// key=beans, value34
// key=cabbage, value2
// key=carrot, value25
// key=tomato, value21

krsort($fruits);
// output:
// key=tomato, value21
// key=carrot, value25
// key=cabbage, value2
// key=beans, value34

foreach($fruits as $x => $y){
    echo "key=".$x.", value".$y;
    echo"<br>";
    }
?>