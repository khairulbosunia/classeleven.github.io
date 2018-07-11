<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 if(get_post_meta($post->ID, 'stock_page_options', true)){
	 
 $page_meta = get_post_meta($post->ID, 'stock_page_options', true);
 
 }else{
	$page_meta = array();
 }
 
 
 
 if(array_key_exists('enable_title', $page_meta)) {
	 $enable_title = $page_meta['enable_title'];
 }else{
	 $enable_title = true;
 }
 
  if(array_key_exists('enable_content', $page_meta)) {
	 $enable_content = $page_meta['enable_content'];
 }else{
	 $enable_title = false;
 }
 
 
 
 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if($enable_title == true) : ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php endif; ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		
		if($enable_content == true){
			the_content();
		}
		

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

</article><!-- #post-## -->
