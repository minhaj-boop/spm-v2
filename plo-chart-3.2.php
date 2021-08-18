<?php
    if(!empty($_POST['program'])) {
        $selected = $_POST['program'];
        echo $selected . '<br/>';
    }

    echo '<br/>';

    if(!empty($_POST['semester'])) {
        foreach($_POST['semester'] as $selected) {
            echo $selected . '<br/>';
        }
    }
?>