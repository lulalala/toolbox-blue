<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 * @template-name ArchiveList
*/

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<ul>
						    <?php wp_get_archives('type=postbypost'); ?>
						</ul>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'toolbox' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->
<!--
<h2><?php _e('Archives') ?></h2>

<h3><?php _e('Archives by Month') ?></h3>
<ul>
    <?php wp_get_archives('type=monthly'); ?>
</ul>
<p>&nbsp;</p>
<h3><?php _e('Archives by Subject') ?></h3>
<ul>
     <?php wp_list_cats(); ?>
</ul>

<?php if( function_exists('wp_tag_cloud') ) { ?>
<p>&nbsp;</p>
<h3><?php _e('Tags') ?></h3>
<?php wp_tag_cloud(); ?>
<?php } ?>
-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
