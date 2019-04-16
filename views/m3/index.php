<?php $ROOT = "~dmifsud/ct310/m3/"; ?>
<div class="container">
	<div class="row">
		<div class="col text-center m-5">
			<h1>Welcome!</h1>
			<h2>Are you a...</h2>
		</div>
	</div>
	<div class="row mb-5">
		<div class="wrapper col">
		  <div id="formContent">
		    <!-- Tabs Titles -->

		    <!-- Icon -->
		    <div class="fadeIn first">
		    	<br>
		      <h4>New User</h4>
		    </div>
		    <div id="formFooter">
		    	<?php echo '<form action="/'. $ROOT. 'index/m3/sign_up">'?>
		      	<button id="linky">Sign up here</button>
		      </form>
		    </div>

		  </div>
		</div>
		<div class="wrapper col">
		  <div id="formContent">
		    <!-- Tabs Titles -->

		    <!-- Icon -->
		    <div class="fadeIn first">
		    	<br>
		      <h4>Returning User</h4>
		    </div>
		    <div id="formFooter" class="text-center">
		    	<?php echo '<form action="/'. $ROOT. 'index/m3/sign_in">'?>
		      	<button id="linky" >Sign in here</button>
		      </form>
		    </div>

		  </div>
		</div>
	</div>
</div> 
