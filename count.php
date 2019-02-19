<?php
    if (!empty($_COOKIE['count'])) {
        $count = $_COOKIE['count'] + 1;
    } else {
        $count = 0;
    }

    echo "string " . $_COOKIE['count'];
?>
