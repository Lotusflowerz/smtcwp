
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Blog Template for Bootstrap</title>
	<link href="<?php echo get_bloginfo( 'template_directory' );?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

	<div class="container">
			<infobar class="topinfo">
				
			</infobar>
	<div class="blog-masthead">
		
		
		<div class="container">
			<nav class="blog-nav">
				<!-- <a class="blog-nav-item active" href="#">Home</a> -->
				<?php wp_list_pages( '&title_li=' ); ?>
			</nav>
		</div>
	</div>
	
	<div class="container">

		<div class="blog-header">
			</div>