<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>

<div id="container">

<header>

<h1 class="logo"><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_theme_file_uri ('images/logo_white.png'); ?>" alt="あなたのサイト名"></a></h1>

<!--メニュー-->
<div id="menubar">

<nav>
<ul>
<li><a href="<?php echo esc_url( get_post_type_archive_link( 'products' ) ?: home_url( '/products/' ) ); ?>">商品一覧</a>
	<ul>
	<li><a href="#">ドロップダウンメニュー</a></li>
	<li><a href="#">メニュー</a></li>
	<li><a href="#">メニュー</a></li>
	</ul>
</li>
<li><a href="<?php echo esc_url( home_url( '/kodawari/' ) ); ?>">素材とこだわり</a></li>
<li><a href="<?php echo esc_url( home_url( '/osusume/' ) ); ?>">おすすめ商品</a></li>
<li><a href="#">ショールーム</a></li>
</ul>
</nav>

<div class="sh">小さな端末でのみ表示させたい情報があれば、ここに記入して下さい。</div>

</div>
<!--/#menubar-->

<div class="icons">
<a href="#"><i class="ph-light ph-magnifying-glass"></i></a>
<a href="#"><i class="ph-light ph-user"></i></a>
<a href="#"><i class="ph-light ph-shopping-cart"></i></a>
</div>

</header>