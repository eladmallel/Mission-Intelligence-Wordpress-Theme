<?php get_header(); ?>
<div id="contentcontainer">
	<div id="content" class="centeredcontainer">
		<div id="main-content">
			
			<h1> <?php the_title(); ?> </h1>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		
				<div class="single-content">	
							<?php the_content(); ?>
							<?php edit_post_link( __( '[Edit This Page]'), '<span class="edit-link">', '</span>' ); ?>
							
				</div><!-- .single-content -->
			
			<?php endwhile; else : ?>
		
				<div class="single-content">
				
					<h2>Page Not Found</h2>
					
					<p>Looks like the page you're looking for isn't here anymore. Try using the search box below.</p>
					
					<?php include(TEMPLATEPATH.'/searchform.php'); ?>
					
				</div> <!-- .single -->
				
			<?php endif; ?>
			
			<!--<div id="comments-area">
				<?php // uncomment this to enable comments on pages comments_template( '', true ) ?>
			</div>-->
			
		</div><!-- #main-content -->
	</div>
</div>
<?php get_footer(); ?>