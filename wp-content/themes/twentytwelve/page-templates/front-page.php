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

<!-- Start of the Loop -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php if ( $post->post_excerpt ) : // If there is an explicitly defined excerpt ?>
<div class="excerpt-post clearfix">
<h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" accesskey="s"><?php the_title(); ?></a>
</h2>
<div class="catslist"><?php the_category(' and '); ?></div>
<div class="entry">
<?php the_excerpt(); ?><br />
<div class="readmore">
<a href="<?php the_permalink(); ?>">CONTINUE READING</a>
</div>
</div> <!--end of entry -->
<!-- <?php trackback_rdf(); ?> -->
</div><!-- end of excerpt-post -->
<?php else : // If there is not an explictly defined excerpt ?>
<div class="excerpt-post clearfix">
<h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
</h2>
<div class="catslist"><?php the_category(' and '); ?></div>
<div class="entry">
<?php the_content('<span class="readmore">CONTINUE READING</span>'); ?>
</div><!-- end of entry -->
<!-- <?php trackback_rdf(); ?> -->
</div><!-- end of excerpt-post -->
<?php endif; // End the excerpt vs. content "if" statement ?>
<?php endwhile; else: ?>
<h2 class="center">Page Not Found</h2>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<p><?php _e('To help you find the information you seek, 
we recommend you check out our 
<a title="Camera on the Road Site Map" href="sitemap.php">Site Map</a> 
to help track down what you are looking for.'); ?></p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
<!--end Loop -->


            	<?php endwhile; // end of the loop. ?>
			</div>
		
            <div class='col-md-5 entry-content'>
	            <h1><a href='/category/seminar/'>Seminars and Talks</a></h1>
	            <?php query_posts('category_name=seminar&showposts=5'); ?>
	            <?php while ( have_posts() ) : the_post(); ?>
	            <?php endwhile; // end of the loop. ?>
            </div>
		</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>
