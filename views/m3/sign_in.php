<div class="wrapper">
  <div id="formContent">
    <!-- Tabs Titles -->
	 <br>
    <!-- Icon -->
    <div class="fadeIn first">
      <h4>Log In</h4>
    </div>

    <!-- Login Form -->
	<?php
	if(isset($login_error)){
		echo '<p><small>' . $login_error . '</small></p>';
	}
	echo Form::open(array('action' => 'index/m3/sign_in', 'method' => 'post'));
	
		echo '<input type="text" id="login" class="fadeIn second login-form" name="username" placeholder="login">';
      echo '<input type="password" id="password" class="fadeIn third login-form" name="password" placeholder="password">';
		echo '<input type="submit" class="fadeIn fourth btn btn-default" value="Log In">';
	
	echo Form::close();
	?>    

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="sign_up">New User? Sign up here.</a>
    </div>

  </div>
</div>
