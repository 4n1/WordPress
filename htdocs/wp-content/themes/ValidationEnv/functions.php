<?php
// カスタムメニューを設定可能にする。
add_theme_support('menus');


// カスタムのナビゲーションメニューを設定する。
function add_custom_navi_menus()
{
    register_nav_menus(array(
        'headnav' => 'ヘッダナビゲーション',
        'headnav-kenko' => 'ヘッダナビゲーション 健康ch',
        'sidebarnav' => 'サイドナビゲーション',
        'bottomnav' => 'ボトムナビゲーション',
        'footernavl' => 'フッタナビゲーション左',
        'footernavr' => 'フッタナビゲーション右',
        )
    );
}
add_action('after_setup_theme', 'add_custom_navi_menus');


// アイキャッチ画像を表示させる。
add_theme_support('post-thumbnails');

// favicon.icoを設定する。
function glob_favicon()
{
    echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_bloginfo('template_url').'/images/favicon.ico" />'."\n";
}

// add_action('wp_head', 'blog_favicon');

// ウィジェットを使用可能にする。
register_sidebar();


// ショートコードを処理するハンドラ関数
function add_php_handler($atts = array())
{
    extract(shortcode_atts(array(
        // 属性が省略された場合のデフォルト値を設定する。
        'file' => 'default'
    ), $atts));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}
// ハンドラ関数を登録する。
add_shortcode('include_php', 'add_php_handler');
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');



// 日本語スラッグを数字に変更する。
function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
    if (preg_match( '/(%[0-9a-f]{2})+/', $slug )) {
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );

// スタイルシート(style.css)へのリンク設定
// ※これによりheader.phpのCSSリンク記載が不要になる。
// プラグインによってはCSSリンクを書き換えるものがあるが、それを回避できる。
function set_style_link()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'set_style_link');
