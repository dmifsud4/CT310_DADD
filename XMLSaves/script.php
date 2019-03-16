<?php
    foreach (glob('/s/bach/m/under/dofe6096/local_html/ct310/m2/XMLSaves/*.xml') as $filename) {
        echo '<option value="'.$filename.'">'.substr($filename, 54).'<br>';
    }
?>
