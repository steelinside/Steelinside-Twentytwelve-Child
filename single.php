<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<div class="social">
				<!--VK-->
				<a class = "vk share" href = "https://vk.com/share.php?url=<?php the_permalink();?>&title=<?php the_title(); ?>&" title="ВКонтакте"><span class = "icon-vk2"></span>&nbsp;ВКонтакте</a>
				<!--Facebook-->
				<a class="facebook share" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Поделиться на Фейсбуке"><span class = "icon-facebook"></span>&nbsp;Facebook</a>						
				<!--Twitter-->
				<a class="twitter share" href="http://twitter.com/home?status=Читаю: <?php the_permalink(); ?>" title="Затвитить!"><span class = "icon-twitter"></span>&nbsp;Twitter</a>
				<!--Google Plus-->
				<a class="google-plus share" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><span class = "icon-google-plus2"></span>&nbsp;Google+</a>
				</div>
				<div class = "st_related_posts">
					<?php related_posts();?>
				</div>
				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
