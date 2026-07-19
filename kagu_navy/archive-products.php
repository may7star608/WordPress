<?php get_header(); ?>

<div id="contents">

<main>

<section>

<h2 class="c">商品一覧<span>PRODUCTS</span></h2>

<?php
$product_sections = array(
	array(
		'name'     => 'ソファ',
		'slug'     => 'sofa',
		'fallback' => '/images/img1.jpg',
	),
	array(
		'name'     => 'ダイニング',
		'slug'     => 'dining',
		'fallback' => '/images/img2.jpg',
	),
	array(
		'name'     => 'インテリア雑貨',
		'slug'     => 'interior',
		'fallback' => '/images/img3.jpg',
	),
);

foreach ( $product_sections as $product_section ) :
	$product_query = new WP_Query(
		array(
			'post_type'      => 'products',
			'post_status'    => 'publish',
			'posts_per_page' => 6,
			'no_found_rows'  => true,
			'tax_query'      => array(
				array(
					'taxonomy' => 'product_category',
					'field'    => 'slug',
					'terms'    => $product_section['slug'],
				),
			),
		)
	);
	?>

<h3><?php echo esc_html( $product_section['name'] ); ?></h3>

<?php if ( $product_query->have_posts() ) : ?>
<div class="list1">

<?php
while ( $product_query->have_posts() ) :
	$product_query->the_post();
	?>
<article <?php post_class( 'list inview' ); ?>>
<div class="image">
<?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail( 'large', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
<?php else : ?>
	<img src="<?php echo esc_url( get_theme_file_uri( $product_section['fallback'] ) ); ?>" alt="">
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
<p>現在、このカテゴリーの商品は登録されていません。</p>
<?php endif; ?>

<?php
	wp_reset_postdata();
endforeach;
?>

</section>

</main>

</div>
<!--/#contents-->

<?php get_footer(); ?>
