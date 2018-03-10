<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php if ( is_single() ) { ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php } else { ?>
    <article id="post-<?php the_ID(); ?>" class="post type-post status-publish format-standard hentry" style="padding-top: 45px; padding-bottom: 2px;">
<?php }  ?>
	<?php
		// Post thumbnail.
    if ( is_single() ) :
		twentyfifteen_post_thumbnail();
    endif;
	?>

	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" >', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

    <?php if ( is_single() ) : ?>
        <div class="entry-content">
            <?php
                /* translators: %s: Name of current post */
                the_content( sprintf(
                    __( 'Continue reading %s', 'twentyfifteen' ),
                    the_title( '<span class="screen-reader-text">', '</span>', false )
                ) );

                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
            ?>
        </div><!-- .entry-content -->

        <?php
        if( have_rows('posts') ):
            $count = count(get_field('posts'));
            if($count == 3) {
                $width = '32.5%;';
            } else if($count == 2) {
                $width = '49.5%;';
            } else {
                $width = '100%;';
            }
            ?>
                <div id="relacionados">
                    <h3>Conteúdo Relacionado:</h3>
                    <div id="relacionado-container">
                        <?php
                        // loop through the rows of data
                        while ( have_rows('posts') ) : the_row();


                            $image = get_sub_field('imagem');
                            ?><a href="<?php the_sub_field('link'); ?>" target="_blank">
                            <div class="relacionado-contem" style="width: <?php echo $width; ?>">
                            <div class="relacionado-item" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.6) 100%),url(<?php echo $image['url']; ?>)">
                                <div class="relacionado-texto">
                                <?php the_sub_field('titulo'); ?>
                                </div>
                            </div></a>
                             </div>
                            <?php
                        endwhile;
                        ?>
                    </div>
                </div>

            <?php
        endif;
        ?>

    <?php endif; ?>

</article><!-- #post-## -->
