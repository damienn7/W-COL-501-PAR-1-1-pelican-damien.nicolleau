<?php

require("./index.php");

foreach ($argv as $key => $arg) {
    if ($key > 0) {
        if (is_int(intval($arg))) {
            if (intval($arg) > 60 && intval($arg) < 360) {
                echo "\n\033[36m######\033[33mJoueur $key\033[36m######\n\n";
                pelican_game($arg);
            } else {
                echo "Valeur impossible\n";
            }
        } else {
            echo "Valeur impossible\n";
        }
    }
}