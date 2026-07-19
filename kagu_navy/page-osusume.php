<?php
/*
Template Name: おすすめ商品
*/
get_header();
?>

<div id="contents">

<main>

<section>

<h2 class="c">おすすめ商品<span>FEATURED PRODUCTS</span></h2>

<?php
$featured_products = new WP_Query(
	array(
		'post_type'      => 'recommendations',
		'post_status'    => 'publish',
		'posts_per_page' => 9,
		'no_found_rows'  => true,
	)
);
?>

<?php if ( $featured_products->have_posts() ) : ?>
<div class="list1">

<?php
while ( $featured_products->have_posts() ) :
	$featured_products->the_post();
	?>
<article <?php post_class( 'list inview' ); ?>>
<div class="image">
<?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail( 'large', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
<?php else : ?>
	<img src="<?php echo esc_url( get_theme_file_uri( '/images/img5.jpg' ) ); ?>" alt="">
<?php endif; ?>
</div>
<div class="text">
<h4><?php the_title(); ?></h4>
<?php the_excerpt(); ?>
</div>
</article>
<?php endwhile; ?>

</div>
<!--/.list1-->

<?php else : ?>
<p>現在、おすすめ商品は登録されていません。</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>

</section>

</main>

</div>
<!--/#contents-->

<?php get_footer(); ?>
