<?php
    if(!empty($_POST['plo'])) {
        foreach($_POST['plo'] as $selected) {
            echo $selected . '<br/>';
        }
    }

    echo '<br/>';

    if(!empty($_POST['university'])) {
        foreach($_POST['university'] as $selected) {
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