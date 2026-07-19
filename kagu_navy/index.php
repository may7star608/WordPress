<?php get_header(); ?>

<!--スライドショー-->
<div class="mainimg intro-vertical">

<div class="slide img1">
<div class="text left">
<h2>暮らしに、<br>余白を。</h2>
<p class="mb1rem">余白の美しさを大切に、住まいにゆとりと静けさを。</p>
<div class="btn-container">
<div class="btn"><a href="#">コレクションを見る<svg class="arrow" viewBox="0 0 40 10" aria-hidden="true"><line x1="12" y1="5" x2="38" y2="5"/><polyline points="32,1 38,5 32,9"/></svg></a></div>
</div>
</div>
<picture><source media="(max-width: 800px)" srcset="<?php echo get_theme_file_uri('images/mainimg1_s.jpg'); ?>"><img src="<?php echo get_theme_file_uri('images/mainimg1.jpg'); ?>" alt=""></picture>
</div>

<div class="slide img2">
<div class="text left inverse">
<h2>素材の声に、<br>耳を澄ませて。</h2>
<p class="mb1rem">触れるたびに伝わる、確かな手仕事と時間の積み重ね。</p>
<div class="btn-container">
<div class="btn inverse"><a href="#">コレクションを見る<svg class="arrow" viewBox="0 0 40 10" aria-hidden="true"><line x1="12" y1="5" x2="38" y2="5"/><polyline points="32,1 38,5 32,9"/></svg></a></div>
</div>
</div>
<picture><source media="(max-width: 800px)" srcset="<?php echo get_theme_file_uri('images/mainimg2_s.jpg'); ?>"><img src="<?php echo get_theme_file_uri('images/mainimg2.jpg'); ?>" alt=""></picture>
</div>

<div class="slide img3">
<div class="text left">
<h2>美しい暮らしを、<br>かたちに。</h2>
<p class="mb1rem">上品な素材と、洗練されたデザインで日常に心地よさと豊かさを。</p>
<div class="btn-container">
<div class="btn"><a href="#">コレクションを見る<svg class="arrow" viewBox="0 0 40 10" aria-hidden="true"><line x1="12" y1="5" x2="38" y2="5"/><polyline points="32,1 38,5 32,9"/></svg></a></div>
</div>
</div>
<picture><source media="(max-width: 800px)" srcset="<?php echo get_theme_file_uri('images/mainimg3_s.jpg'); ?>"><img src="<?php echo get_theme_file_uri('images/mainimg3.jpg'); ?>" alt=""></picture>
</div>

<div class="slide-indicators"></div><!--現在表示中ボタン-->

</div>
<!--/.mainimg-->

<div id="contents">

<main>

<section>

<h2 class="c">日本の美意識で、日常を整える。<span>PRODUCTS</span></h2>
<p class="c">私たちは、素材の持つ魅力を最大限に引き出し、暮らしに寄り添う家具とインテリアをお届けします。<br>
シンプルでありながら、長く愛せる上質なデザインを追求しています。</p>

<div class="list1 bg1-light-parts">

<div class="list inview">
<a href="<?php echo esc_url( get_post_type_archive_link( 'products' ) ?: home_url( '/products/' ) ); ?>">
<div class="image"><img src="<?php echo get_theme_file_uri ('images/img1.jpg'); ?>" alt=""></div>
<div class="text">
<h4>ソファ<svg class="arrow" viewBox="0 0 40 10" aria-hidden="true"><line x1="12" y1="5" x2="38" y2="5"/><polyline points="32,1 38,5 32,9"/></svg></h4>
<p>くつろぎの時間を、美しき快適に。</p>
</div>
</a>
</div>

<div class="list inview">
<a href="<?php echo esc_url( get_post_type_archive_link( 'products' ) ?: home_url( '/products/' ) ); ?>">
<div class="image"><img src="<?php echo get_theme_file_uri ('images/img2.jpg'); ?>" alt=""></div>
<div class="text">
<h4>ダイニング<svg class="arrow" viewBox="0 0 40 10" aria-hidden="true"><line x1="12" y1="5" x2="38" y2="5"/><polyline points="32,1 38,5 32,9"/></svg></h4>
<p>食卓を、心地よい時間に。</p>
</div>
</a>
</div>

<div class="list inview">
<a href="<?php echo esc_url( get_post_type_archive_link( 'products' ) ?: home_url( '/products/' ) ); ?>">
<div class="image"><img src="<?php echo get_theme_file_uri ('images/img3.jpg'); ?>" alt=""></div>
<div class="text">
<h4>インテリア雑貨<svg class="arrow" viewBox="0 0 40 10" aria-hidden="true"><line x1="12" y1="5" x2="38" y2="5"/><polyline points="32,1 38,5 32,9"/></svg></h4>
<p>空間にやさしい彩を添える。</p>
</div>
</a>
</div>

</div>
<!--/.list1-->

</section>

<section>

<div class="flex1">

<div class="text">
<h2>素材と技術が生み出す、<br>確かな品質。<span>CRAFTMANSHIP</span></h2>
<p>無垢材の剪定から仕上げまで、職人の丁寧な手仕事を大切にしています。<br>
見えない部分にもこだわり、長く使える家具をつくります。</p>
<p class="btn"><a href="<?php echo esc_url( home_url( '/kodawari/' ) ); ?>">素材とこだわりを見る<svg class="arrow" viewBox="0 0 40 10" aria-hidden="true"><line x1="12" y1="5" x2="38" y2="5"/><polyline points="32,1 38,5 32,9"/></svg></a></p>
</div>

<div class="image"><img src="<?php echo get_theme_file_uri ('images/img4.jpg'); ?>" alt=""></div>

</div>
<!--/.flex1-->

</section>

<section>

<h2 class="c">おすすめ商品<span>FEATURED PRODUCTS</span></h2>

<div class="list-auto1">

<div class="img">

<div>
<a href="#">
<img src="<?php echo get_theme_file_uri ('images/img5.jpg'); ?>" alt="">
<h4>タイトルをここに入れます</h4>
<p>説明をここに書きます。サンプルテキスト。</p>
</a>
</div>

<div>
<a href="#">
<img src="<?php echo get_theme_file_uri ('images/img6.jpg'); ?>" alt="">
<h4>タイトルをここに入れます</h4>
<p>説明をここに書きます。サンプルテキスト。</p>
</a>
</div>

<div>
<a href="#">
<img src="<?php echo get_theme_file_uri ('images/img7.jpg'); ?>" alt="">
<h4>タイトルをここに入れます</h4>
<p>説明をここに書きます。サンプルテキスト。</p>
</a>
</div>

<div>
<a href="#">
<img src="<?php echo get_theme_file_uri ('images/img8.jpg'); ?>" alt="">
<h4>タイトルをここに入れます</h4>
<p>説明をここに書きます。サンプルテキスト。</p>
</a>
</div>

<div>
<a href="#">
<img src="<?php echo get_theme_file_uri ('images/img5.jpg'); ?>" alt="">
<h4>タイトルをここに入れます</h4>
<p>説明をここに書きます。サンプルテキスト。</p>
</a>
</div>

<div>
<a href="#">
<img src="<?php echo get_theme_file_uri ('images/img6.jpg'); ?>" alt="">
<h4>タイトルをここに入れます</h4>
<p>説明をここに書きます。サンプルテキスト。</p>
</a>
</div>

</div>
<!--/.img-->

<div class="slide-indicators"></div><!--現在表示中ボタン-->

</div>
<!--/.list-auto1-->

<p class="btn inverse c"><a href="<?php echo esc_url( home_url( '/osusume/' ) ); ?>">すべての商品を見る<svg class="arrow" viewBox="0 0 40 10" aria-hidden="true"><line x1="12" y1="5" x2="38" y2="5"/><polyline points="32,1 38,5 32,9"/></svg></a></p>

</section>

<section class="bg-parts bg1-light-parts mb0">

<h2 class="c">お客様の声<span>CUSTOMER VOICE</span></h2>

<div class="list-yoko-scroll1">

<div class="list">
<p class="text">シンプルで上質、リビングがホテルのような落ち着きのある空間になりました。
<span class="name">—　東京都　K様</span></p>
</div>

<div class="list">
<p class="text">ダイニングテーブルの質感がとても美しく、毎日の食事が楽しみになりました。
<span class="name">—　神奈川県　Y様</span></p>
</div>

<div class="list">
<p class="text">長く使える家具を探していましたが、理想通りのものに出会えました。
<span class="name">—　千葉県　M様</span></p>
</div>

<div class="list">
<p class="text">シンプルで上質、リビングがホテルのような落ち着きのある空間になりました。
<span class="name">—　東京都　K様</span></p>
</div>

<div class="list">
<p class="text">ダイニングテーブルの質感がとても美しく、毎日の食事が楽しみになりました。
<span class="name">—　神奈川県　Y様</span></p>
</div>

<div class="list">
<p class="text">長く使える家具を探していましたが、理想通りのものに出会えました。
<span class="name">—　千葉県　M様</span></p>
</div>

</div>
<!--/.list-yoko-scroll1-->

</section>

<section>

<h2>お知らせ<span>NEWS</span></h2>

<dl class="news">
<?php
$news_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 6,
		'post_status'    => 'publish',
	)
);

if ( $news_query->have_posts() ) :
	while ( $news_query->have_posts() ) :
		$news_query->the_post();
		?>
<dt><?php the_time( 'Y/m/d' ); ?></dt>
<dd><?php the_title(); ?><?php the_content(); ?></dd>
		<?php
	endwhile;
	wp_reset_postdata();
endif;
?>
</dl>

</section>

<section class="mb0 mt0">

<div class="bg-image1">

<div class="text">
<h2>ショールームで、<br>実際の心地よさをご体感ください。<span>SHOWROOM</span></h2>
<p class="btn inverse"><a href="#">ショールームを見る<svg class="arrow" viewBox="0 0 40 10" aria-hidden="true"><line x1="12" y1="5" x2="38" y2="5"/><polyline points="32,1 38,5 32,9"/></svg></a></p>
</div>

<div class="image"><img src="<?php echo get_theme_file_uri ('images/img9.jpg'); ?>" alt=""></div>

</div>
<!--/.bg-image1-->

</section>

</main>

</div>
<!--/#contents-->

<?php get_footer(); ?>