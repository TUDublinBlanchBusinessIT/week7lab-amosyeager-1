<?php
include("team.php);


if (isset($_get['teamname'])) (
$teamname = $_get['teamname'];

$hometeam = new team ($teamname);

if (isset($_get['result1']) (
    result1 = $_get['result1'];
    list($ht1, $at1)  = explode('_', $result1);
    $hometeam ->finalscore(intva1($ht1), intva1($at1));
    }
    if (isset($_get['result2']';
     $result2 = $_get['result2'];
    list($ht2, $at2)  = explode('_', $result2);
    $hometeam ->finalscore(intva1($ht2), intva1($at2));
    }
     if (isset($_get['result3']';
     $result3 = $_get['result3'];
    list($ht3, $at3)  = explode('_', $result3);
    $hometeam ->finalscore(intva1($ht3), intva1($at3));
    }
    $goalaverage =$hometeam->getgoalaverage();
    echo "goal average for $teamname; " . number_format($goalaverage, 2);
    else{
    echo " team name not provided";