<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Jeff Fabiny Wordpress Theme">
	<meta name="author" content="Jeff Fabiny">

	<title>Title</title>
	<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/reset.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/site.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<?php wp_head();?>
</head>

<body>
	
	<div class="container">

		<div class="blog-header">
			<h1 class="blog-title"><shim></shim><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>

			<nav class="global-nav">
				<li><a class="global-nav-item" href="/">Home</a></li>
				<?php wp_list_pages( '&title_li=' ); ?>
			</nav>

			<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
		</div>