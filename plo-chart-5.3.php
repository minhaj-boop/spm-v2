<?php

    if(!empty($_POST['faculty'])) {
        $selected = $_POST['faculty'];
        echo $selected . '<br/>';
    }

    echo '<br>';

    if(!empty($_POST['semester'])) {
        foreach($_POST['semester'] as $selected) {
            echo $selected . '<br/>';
        }
    }
?>