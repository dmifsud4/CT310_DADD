<!DOCTYPE html>
<?php $ROOT = "~dmifsud/ct310/m3/"; ?>
<html lang="en">
  <head>
  	 <style>
		@import url('https://fonts.googleapis.com/css?family=Poppins');
	 </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php echo Asset::css('site.css'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title><?php echo $title; ?></title>
  </head>
  <body>

    <header>
      <div class="jumbotron text-center" style="margin-bottom:0">
      	<?php echo Asset::img('DADD.png', array('id'=> 'logo')); ?>
  		</div>
    </header>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
    	<?php echo '<a class="nav-link" href="/' . $ROOT. '">Home</a>' ?>
    </li>
    <li class="nav-item">
    	<?php echo '<a class="nav-link" href="/' . $ROOT. 'index/m3/report">Report</a>' ?>
    </li>
    <li class="nav-item">
    	<?php echo '<a class="nav-link" href="/' . $ROOT. 'index/m3/about">About</a>' ?>
    </li>
    <li class="nav-item">
    	<?php echo '<a class="nav-link" href="/' . $ROOT. 'index/m3/more_information" >More Information</a>' ?>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item-right">
    	<?php 
    	if( ! Auth::check() ) {
    		echo '<a class="nav-link" href="/' . $ROOT. 'index/m3/sign_in" >Login</a>';
    	} else {
    		echo '<a class="nav-link" href="/' . $ROOT. 'index/m3/logout" >Logout</a>';
    	}?>
    </li>
  </ul>
</div>
</nav>


    <?php echo $content; ?>


  <footer class="footer">
    <div class="jumbotron text-center" style="margin-bottom:0">
      <p style="margin-top:0px;">Copyright &copy; 2019, DADD Enterprises</p>
      <p>This site was built using the <a href='https://fuelphp.com/' target='_blank'>FuelPHP framework</a>, Part of a <a href="https://www.cs.colostate.edu/~ct310/yr2019sp/" target="_blank">CT310</a> course project</p>
</div>
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
