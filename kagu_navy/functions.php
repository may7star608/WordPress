<?php

function my_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

function my_theme_register_content_types() {
    register_post_type(
        'recommendations',
        array(
            'labels' => array(
                'name'               => 'おすすめ商品',
                'singular_name'      => 'おすすめ商品',
                'menu_name'          => 'おすすめ商品',
                'add_new'            => '新規追加',
                'add_new_item'       => 'おすすめ商品を追加',
                'edit_item'          => 'おすすめ商品を編集',
                'new_item'           => '新しいおすすめ商品',
                'view_item'          => 'おすすめ商品を表示',
                'search_items'       => 'おすすめ商品を検索',
                'not_found'          => 'おすすめ商品が見つかりませんでした',
                'not_found_in_trash' => 'ゴミ箱におすすめ商品はありません',
            ),
            'public'             => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_rest'       => true,
            'publicly_queryable' => false,
            'has_archive'        => false,
            'rewrite'            => false,
            'menu_icon'          => 'dashicons-star-filled',
            'supports'           => array('title', 'editor', 'excerpt', 'thumbnail'),
        )
    );

    register_taxonomy(
        'product_category',
        array('products'),
        array(
            'labels' => array(
                'name'          => '商品カテゴリー',
                'singular_name' => '商品カテゴリー',
                'all_items'     => '商品カテゴリー一覧',
                'edit_item'     => '商品カテゴリーを編集',
                'add_new_item'  => '商品カテゴリーを追加',
                'menu_name'     => '商品カテゴリー',
            ),
            'public'            => true,
            'hierarchical'      => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'rewrite'           => array('slug' => 'product-category'),
        )
    );

    $default_terms = array(
        'sofa'     => 'ソファ',
        'dining'   => 'ダイニング',
        'interior' => 'インテリア雑貨',
    );

    foreach ( $default_terms as $slug => $name ) {
        if ( ! term_exists( $slug, 'product_category' ) ) {
            wp_insert_term( $name, 'product_category', array('slug' => $slug) );
        }
    }
}
add_action('init', 'my_theme_register_content_types', 20);

function my_theme_file() {

    // CSSの読み込み
    wp_enqueue_style('my_style_theme', get_theme_file_uri('/css/style.css'), array(), '1.0');

    // jQuery（テンプレートは $ を直接使うため CDN版を読み込む）
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);

    // パララックス（inview）
    wp_enqueue_script('jquery-inview', 'https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js', array('jquery'), '1.1.2', true);
    wp_enqueue_script('jquery-inview-set', get_theme_file_uri('/js/jquery.inview_set.js'), array('jquery-inview'), '1.0', true);

    // テンプレート専用スクリプト
    wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), array('jquery-inview-set'), '1.0', true);

}
add_action('wp_enqueue_scripts', 'my_theme_file');