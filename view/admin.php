<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elevator - Multipurpose Bootstrap Theme</title>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <!-- Stylesheets -->
    <?= HTML::stylesheet('bootstrap/css/bootstrap.min.css') ?>
    <?= HTML::stylesheet('font-awesome.min.css') ?>
    <?= HTML::stylesheet('animate.css') ?>
    <?= HTML::stylesheet('style.css') ?>

    <!-- Scripts -->
    <?= HTML::script('jquery-2.1.1.min.js'); ?>
    <?= HTML::script('bootstrap/js/bootstrap.min.js'); ?>
    <?= HTML::script('jquery.appear.js'); ?>
    <?= HTML::script('contact_me.js'); ?>
    <?= HTML::script('jqBootstrapValidation.js'); ?>
    <?= HTML::script('modernizr.custom.js'); ?>
    <?= HTML::script('script.js'); ?>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<article style="background: white; width:80%; max-width: 800px; margin: 0 auto; padding: 20px;">
<h2>Administrators</h2>
<?php if( count($transcripts) < 1 ): ?>
<p>There are no transcripts yet</p>
<?php else: ?>
<ol type="1">
<?php foreach($transcripts as $key => $transcript): ?>
<li><strong>Student name:</strong> <?= $transcript['student_name']; ?>, <strong>Campus id:</strong> <?= $transcript['campus_id']; ?></li>
<?php endforeach; ?>
</ol>
<?php endif; ?>
</article>
</body>
</html>
