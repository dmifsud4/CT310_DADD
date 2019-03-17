<?php
    $fileDir = '/s/bach/m/under/dofe6096/local_html/ct310/m2/XMLSaves/';
    echo "<button id='loadButton' name='load' onclick='load_xml(); open_comments();'>Load File</button><select id='dropDown' name='dropDown'>";
    foreach (glob($fileDir.'*.xml') as $filename) {
        echo '<option value="'.$filename.'">'.substr($filename, 54).'<br>';
    }
    echo "</select>";
?>
