<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage CodeCacao
 */

get_header(); ?>


<section class="black-bg white">
	<div class="container">
		<h1><?php echo get_the_title(); ?></h1>
		<img class="img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($projectID)); ?>">
		<div id="content">
			<?php 
				$subtitle = get_the_excerpt();
				if($subtitle != ""){
					echo '<h4>'.$subtitle.'</h4>';
				}
			?>
			<?php echo get_post( $post->ID )->post_content; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
