<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
		<div class='row'>
			<div class='col-md-5 entry-content'>
				<h1><a href='/category/announcement/'>News and Announcements</a></h1>
				<?php query_posts('category_name=announcement&showposts=5'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
            	<?php endwhile; // end of the loop. ?>
			</div>
		
            <div class='col-md-5 entry-content'>
	            <h1><a href='/category/seminar/'>Seminars and Talks</a></h1>
				<?php query_posts('category_name=seminar&showposts=5'); ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

				  /* Include the post format-specific template for the content. If you want to
				   * this in a child theme then include a file called called content-___.php
				   * (where ___ is the post format) and that will be used instead.
				   */
				  get_template_part( 'content', get_post_format() );

				endwhile;

				twentytwelve_content_nav( 'nav-below' );
				?>


	            </div>
		</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>
