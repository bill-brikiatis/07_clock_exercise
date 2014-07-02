<?php
	date_default_timezone_set('America/New_York');
	$current_time = date("g:ia");
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The Clock Exercise</title>
  <meta name="description" content="Bill's Clock Exercise">
  <meta name="author" content="Bill Brikiatis">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <?php echo $current_time; ?></body>
</html>