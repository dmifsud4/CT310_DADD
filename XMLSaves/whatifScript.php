<?php 
    echo Form::open(array('action' => 'index/m2/saveData', 'method' => 'post'));
    echo Form::button('savebutton', 'Save Presets', array('class' => 'btn btn-default'));
?>
