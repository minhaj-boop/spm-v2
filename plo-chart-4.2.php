<?php
    if(!empty($_POST['program'])) {
        foreach($_POST['program'] as $selected) {
            echo $selected . '<br/>';
        }
    }

    echo '<br>';

    if(!empty($_POST['university'])) {
        foreach($_POST['university'] as $selected) {
            echo $selected . '<br/>';
        }
    }
?>