<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?= $site['url'] ?>/application/stylesheet.css">
	<title><?= $__e; ?></title>
</head>
<body>
	<section class="err">
		<h1><?=  $__e; ?></h1>
		<p>The application stumbled upon the following error:</p>
		<pre><?= $errors; ?></pre>
		<p>Are you confused? <a href="<?= $site['url'] ?>/application/documentation.php">check the documentation for help</a></p>
	</section>
	<div class="signature">precure web app by Joseph Rex</div>
</body>
</html>