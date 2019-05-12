<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brembarron
 */

get_header(); ?>

	<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
<div id="left-area">
		
		
					
		
					<?php while(have_posts()): the_post(); ?>
		
					<article class="et_pb_post post-217692 post type-post status-publish format-standard hentry category-stock-loans">


					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<p class="post-meta"> by <span class="author vcard"><a href="<?php the_author_meta() ; ?>" title="Posts by <?php the_author(); ?>" rel="author"><?php the_author(); ?></a></span> | <span class="published"><?php the_time('F j, Y'); ?></span> | <a href="stock-loans/index.html" rel="category tag"><?php the_category(' ','',''); ?></a></p><?php echo wp_trim_words(get_the_content(), 40, false); ?>			
					</article> <!-- .et_pb_post -->
			
					<?php endwhile; ?>
		
					
					
					
			<div class="pagination clearfix">
			
			<!-- Pagination -->
				<?php the_posts_pagination(array(
					'screen_reader_text'	=> ' ',
					'prev_text'	=> '<span class="pagination-arrow pagination-arrow_prev arrow-prev"  ></span> ',
					'next_text'	=> '<span class="pagination-arrow pagination-arrow_next arrow-next"  ></span>',
				)); ?>
	<div class="alignright"></div>
	</div>			</div> <!-- #left-area -->

				<?php get_sidebar(); ?>


			<!-- end #sidebar -->
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

	

<?php get_footer();
