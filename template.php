<!-- Insert Home Path Here!!! -->
<?php define('HOMEDIR', '~dofe6096/ct310/m2/');?>

<!DOCTYPE html>

<html lang='en'>

<head>

<!--     <title>?php echo $title; ?></title> -->
    <title>Home</title>
	<meta charset='utf-8'>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <?php echo Asset::css('site.css'); ?>
    <?php echo Asset::js('jquery.js'); ?>
    <?php echo Asset::js('calculations.js')?>
    <?php echo Asset::js('javascript.js'); ?>

<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

</head>

<body>

	<header>

    <div id="top">

      <div id="companyLogo">
        <img src="/~dofe6096/ct310/m2/assets/img/DADD.png" alt="DADD Enterprises">
      </div>

      <div id="companyNav">

        <ul>

          <li id="li1"><a id="a1" <?php echo 'href=\'/'.HOMEDIR.'\''?>>Home</a><a id="a2" <?php echo 'href=\'/'.HOMEDIR.'\'index/m2/about.php'?>>About</a></li>
          <!-- <li id="li2"><a id="a2" href='/~dofe6096/ct310/index.php/m2/about.php'>About</a></li> -->
          <li id="li2"><a id="a3" <?php echo 'href=\'/'.HOMEDIR.'index/m2/more_information.php\''?>>More&nbsp;Information</a></li>

        </ul>

      </div>

    </div>

	</header>

	<div id='main'>
<!-- 		<h2>?php echo $subtitle;?></h2> -->

		<?php echo $content; ?>

	</div>

  <footer class="footer">
  <!--     <p>&copy; Copyright ?php echo date('Y');?>, DADD Enterprises</p> -->
      <p style="margin-top:0px;">Copyright &copy; 2019, DADD Enterprises</p>
      <p>This site was built using the <a href='https://fuelphp.com/' target='_blank'>FuelPHP framework</a></p>
  </footer>

</body>

</html>
