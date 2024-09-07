<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo wp_get_document_title(); ?></title>

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<header>
		<inner-column>
			<h1>SWATCHERY</h1>
			<?php include('templates/components/site-menu/template.php'); ?>
		</inner-column>
	</header>
	<main>
