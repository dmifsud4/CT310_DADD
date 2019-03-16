<div id="moreInfoPage">
<?php

echo Form::open(array('action' => 'index/m2/sendEmail', 'method' => 'post'));

	echo Form::label('Your Email:', 'fromEmail') . ' ';
	echo Form::input('fromEmail', 'youremail@something.com', array('class' => 'form-control'));
	echo '<br><br>';
	
	echo Form::label('Message: &nbsp;', 'message');
	echo Form::textarea('message', '<enter company name>

<demo subject>', array('rows' => 6, 'cols' => 20));
	echo '<br><br>';

// 	echo '<small><b>Note:</b> Please fill all fields correctly to be added into the database!</small><br><br>';
	echo Form::button('frmbutton', 'Submit', array('class' => 'btn btn-default'));

echo Form::close(); ?>
</div>
