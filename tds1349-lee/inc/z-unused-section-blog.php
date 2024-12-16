 <section class="section section-blog">
	<div class="shell">
		<div class="section-body article-body">
			<div class="section-header">
				<h2>Last Blog Posts</h2>
			</div>
			<div class="flex">
			<?php 
			 define('WP_USE_THEMES', false);
				require('./blog/wp-blog-header.php');
			// Get the last 3 posts.
			global $post;
			$args = array( 'posts_per_page' => 3 );
			$myposts = get_posts( $args );

	foreach( $myposts as $post ) :	setup_postdata($post); ?>

			<article id="post-<?php the_ID(); ?>" >
  				<div class="post-img">
	 				 	<?php the_post_thumbnail();?>
	  				<div class="date">
		 				<span class="day"><?php the_time('d, M'); ?></span>
		  				<span class="year"><?php the_date('Y'); ?></span>
					</div>
   				</div>
  				<div class="panel-content">
					<div class="wrap">
						<header class="entry-header">
							<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
						</header>
						<div class="entry-content">
							<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
			</article>
	<?php endforeach; ?>	
			</div>
				<a class="btn btn-blue" href="<?php echo $baseurl ?>blog">See More</a>
			</div>
		</div>
</section> 