<div class="wrapper">
  <div id="formContent">
    <!-- Tabs Titles -->
	 <br>
    <!-- Icon -->
    <div class="fadeIn first">
      <h4>Sign Up</h4>
    </div>

    <!-- Login Form -->
	<?php
	if(isset($login_error)){
		echo '<p><small>' . $login_error . '</small></p>';
	}
	echo Form::open(array('action' => 'index/m3/sign_up', 'method' => 'post'));
	
		echo '<input type="text" id="login" class="fadeIn second login-form" name="username" placeholder="username">';
		echo '<input type="text" id="email" class="fadeIn second login-form" name="email" placeholder="email">';
      echo '<input type="text" id="password" class="fadeIn third login-form" name="password" placeholder="password">';
		echo '<input type="submit" class="fadeIn fourth btn btn-default" value="Resgister">';
	
	echo Form::close();
	?>    
  </div>
</div>