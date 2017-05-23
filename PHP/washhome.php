<?php
$poker = range(0,51);
shuffle($poker);
foreach ($poker as $shf){
    echo $shf.'<br>';
}

