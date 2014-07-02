<?php
	$time_zone = 'America/New_York';
	date_default_timezone_set($time_zone);
	

	/*$script_tz = date_default_timezone_get();

	if (strcmp($script_tz, ini_get('date.timezone'))){
    	echo 'Script timezone differs from ini-set timezone.';
	} else {
    	echo 'Script timezone and ini-set timezone match.';
	}*/
	
	$current_time = date("g:ia");
	$military_time = date("G");
	if ($military_time >= 5 && $military_time < 11) {
		$class="morning";
	}
	elseif ($military_time >= 11 && $military_time < 16) {
		$class="afternoon";
	}
	elseif ($military_time >= 16 && $military_time < 20) {
		$class="evening";
	}
	else {
		$class="night";
	}
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>What Time is It</title>
  <meta name="description" content="Bill's Clock Exercise">
  <meta name="author" content="Bill Brikiatis">

  <link rel="stylesheet" href="css/style.css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body class="<?php echo $class ?>">
		<div class="<?php echo $class; ?>">
		  	<?php 
		  	echo "<h1>It is $current_time</h1>
		  	<small>Time zone: $time_zone;</small><br />
		  	<img src='images/$class.png' alt='Scenery matching the time of day'";
		  	?>
		</div> <!-- END .$class -->
</body>
</html>