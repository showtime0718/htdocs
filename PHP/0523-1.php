<?php

$poker = range(0,51);
shuffle($poker);
foreach ($poker as $card) {
   // echo $card. '<br>';
}
echo'<hr>';
//發牌到四個玩家

//value =所跑出的值
//$i=牌
foreach ($poker as $i => $value){
    //發4人輪流%4  1人1張/4 取整數
    $player[$i%4][(int)($i/4)] = $value;
}
//show card
?>
<table border="1" width="100%">
    <?php
//suit 花色
$suit = array("<font color='black' size='5' >&spades;</font>",
              "<font color='red' size='5' >&hearts;</font>",
              "<font color='red' size='5' >&diamondsuit;</font>",
              "<font color='black' size='5' >&spades;</font>");
$value = array(A,2,3,4,5,6,7,8,9,10,J,Q,K);

//   foreach  取出(X  as X裡的陣列)
//sort =排序
    foreach ($player as $sb){sort($sb);
        echo '<tr>';
    foreach ($sb as $card) {
        echo "<td>{$suit[(int)($card/13)]}{$value[($card/4)]}</td>";

        }
        echo '</tr>';
    }

    ?>
</table>
