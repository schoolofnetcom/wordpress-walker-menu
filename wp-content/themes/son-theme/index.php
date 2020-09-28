<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Walker Menu com Wordpress</title>

	<?php wp_head(); ?>
</head>
<body>
	<ul>
		<li><a href="#home">Home</a></li>
		<li><a href="#news">News</a></li>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Dropdown</a>
			<ul class="dropdown-content">
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
			</ul>
		</li>
	</ul>

	<?php
		wp_nav_menu([
			'theme_location'	=> 'main_menu',
			'container'            => '',
			'menu_class'           => '',
			'menu_id'              => '',
			'items_wrap'           => '<ul>%3$s</ul>',
			'depth'                => 2,
			'walker'               => new MyWalker(),
		]); 
	?>


	<h3>Dropdown Menu inside a Navigation Bar</h3>
	<p>Hover over the "Dropdown" link to see the dropdown menu.</p>

	<?php wp_footer(); ?>
</body>
</html>
