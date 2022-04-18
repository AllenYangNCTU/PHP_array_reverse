<?php
$reve=array(1,2,3,4,5,6,7,8,9,10);
print_r($reve);
count($reve)%2 ? $times=(count($reve)-1)/2 : $times=count($reve)/2;
for($i=0;$i<$times;$i++){
    $tmp=$reve[$i];
    $reve[$i]=$reve[count($reve)-$i-1];
    $reve[count($reve)-$i-1]=$tmp;
}
print("<br>");
print_r($reve)
?>