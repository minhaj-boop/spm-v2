<?php

    if(!empty($_POST['department'])) {
        foreach($_POST['department'] as $selected) {
            echo $selected . '<br/>';
        }
    }

    echo '<br>';

    if(!empty($_POST['semester'])) {
        foreach($_POST['semester'] as $selected) {
            echo $selected . '<br/>';
        }
    }
?>