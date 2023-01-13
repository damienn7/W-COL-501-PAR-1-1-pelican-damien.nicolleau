<?php


function pelican_game($n){
    //test
    //echo "test ok" . $n;
    $nombre_de_depart = intval($n);

    //etape 3
    $total_etape_3 = $nombre_de_depart + 43;

    //test
    //echo $total_etape_3;

    //etape 4
    switch ($total_etape_3) {
        case $total_etape_3 % 32 == 0:
            $total_etape_4 = $total_etape_3 / 8;
            break;
        case $total_etape_3 % 6 == 0:
            $total_etape_4 = $total_etape_3 / 3;
            break;
        default:
            $total_etape_4 = $total_etape_3 - 42;
            break;
    }

    //TEST

    //echo $total_etape_3." ";
    //echo $total_etape_4." ";

    //etape 5
    $total_etape_5 = intval($total_etape_4 / 10) * 10;

    $count = $total_etape_4 - $total_etape_5;

    //TEST

    //echo $count." ".$total_etape_5;

    //affichage du compte de nigel
    for($i=0;$i<$count;$i++){
        echo "      Nigel \033[33m".($i+1)."\033[36m      \n";
    }

    //etape 6
    $total_etape_6 = $total_etape_3 - $total_etape_5;

    //TEST

    //echo " ".$total_etape_6." ";

    //etape 7
    $total_etape_7 = intval($total_etape_6 / 100);

    //TEST

    //echo $total_etape_7." ";
    //echo $total_etape_6;

    // affichage du score
    if ($total_etape_7 >= 0) {
        $score = $total_etape_7;
    }else{
        $score = 0;
    }

    echo "\n\033[33m      Score : ".$score."      \n\n";

}