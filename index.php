<?php get_header(); ?>


	<div id="main-column" class="grid_8">
		<div id="main">
			
			<h1 id="header">
				<a href="<?php echo home_url( '/' ); ?>">leflings.dk</a> <span>home of Niels Flemming S. Madsen</span>
			</h1>
			
			<div id="content">
				
				<?php
				/* Run the loop to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-index.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'index' );
				?>
				
			</div>
			
		</div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>