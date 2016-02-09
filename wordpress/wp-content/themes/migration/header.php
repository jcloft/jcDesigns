<?php
/**
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title( '|', true, 'right' ); ?></title>
<!--
	<link rel='stylesheet' src="wp-content/themes/migration/css/bootstrap.min.css">
    <link rel='stylesheet' src="wp-content/themes/migration/style.css">
-->
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?> ng-app="webApp">

<div class="container nopadding">
