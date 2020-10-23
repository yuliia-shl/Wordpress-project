<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">

		<?php
		// $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$params = array(
			'posts_per_page' => 10, // количество постов на странице
			'cat' => 5,
			'post_type'       => 'post', // тип постов
			'paged'           => 1 //$current_page текущая страница
		);
		query_posts($params);
		 
		// $wp_query->is_archive = true;
		// $wp_query->is_home = false;
		 
		while(have_posts()): the_post();
			/*
			в тело цикла вставьте HTML одного анонса записи, например:*/
			?>
				<!-- <h2><?php the_title() ?></h2> -->
				<!-- <p><?php the_content() ?></p> -->
			<?php	
		endwhile;
		 

			?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
