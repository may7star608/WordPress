<footer>

<div>
<p class="logo"><img src="<?php echo get_theme_file_uri ('images/logo_white.png'); ?>" alt="あなたのサイト名"></p>
<p>東京都XXX区XXXXビル１F<br>
03-0000-0000</p>
</div>

<div>
<div class="menu">
<ul>
<li><a href="#">コレクション</a></li>
<li><a href="<?php echo esc_url( get_post_type_archive_link( 'products' ) ?: home_url( '/products/' ) ); ?>">商品一覧</a></li>
<li><a href="<?php echo esc_url( home_url( '/kodawari/' ) ); ?>">素材とこだわり</a></li>
</ul>
<ul>
<li><a href="#">ショールーム</a></li>
<li><a href="#">ブランドについて</a></li>
</ul>
<ul>
<li><a href="#">ご利用ガイド</a></li>
<li><a href="#">よくあるご質問</a></li>
<li><a href="#">配送・返品について</a></li>
<li><a href="#">お問い合わせ</a></li>
</ul>
</div>
</div>

<div>
<ul class="sns1-parts">
<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-line"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
<small>Copyright&copy; あなたのサイト名 All Rights Reserved.</small>
</div>

</footer>

<!--以下の行はテンプレートの著作。削除しないで下さい。-->
<span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>

<!--メニューオーバーレイ（メニュー外クリックで閉じる用）-->
<div id="menubar-overlay"></div>

</div>
<!--/#container-->

<!--ページの上部へ戻るボタン-->
<div class="pagetop"><a href="#"><i class="fas fa-angle-double-up"></i></a></div>

<!--開閉ボタン（ハンバーガーアイコン）-->
<div id="menubar_hdr">
<span></span><span></span><span></span>
</div>

<?php wp_footer(); ?>

</body>
</html>
