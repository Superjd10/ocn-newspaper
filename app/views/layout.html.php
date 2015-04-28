<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo isset($title) ? _h($title) : config('blog.title') ?></title>

	<meta name="description" content="<?php echo config('blog.description')?>" />

	<meta name="author" content="<?php echo config('blog.author')?>">

	<link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?> Feed" href="<?php echo site_url()?>rss" />

	<link href="<?php echo site_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://bootswatch.com/darkly/bootstrap.min.css">
	<link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&subset=latin,cyrillic-ext" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

		<?php echo content()?>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    

</body>
</html>
