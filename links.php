<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 * @template-name Links
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
						<?php 
							wp_list_bookmarks('
								title_li=
								&title_before=<h3>
								&title_after=</h3>
								&category_before=
								&category_after=
								&orderby=rating
								&order=DESC
								&show_description=1
								&between= — 
							'); 
							// See http://codex.wordpress.org/Template_Tags/wp_list_bookmarks
						
						?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'toolbox' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>