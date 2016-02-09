<?php
/**
 * The default template for displaying content.
 */
?>
<div class="col-xs-12 col-sm-9" id="content">
	<article <?php post_class(); ?>>
	
		<header>			
			<?php the_post_thumbnail(); ?>			
			<h1><?php the_title(); ?></h1>			
		</header>
		
		<div>
			<?php the_content(); ?>
		</div>

	</article>
</div>
