<?php

function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');


/**
* CSSとJavaScriptの読み込み
*/
function my_script_init()
{
wp_enqueue_style('my', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.0', 'all');
wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'drawer' => 'ドロワーメニュー',
'footer' => 'フッターメニュー',
)
);
}
add_action('init', 'my_menu_init');



//画像のクラス名、width、heightを削除
add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );
 
function remove_image_attribute( $html ){
	$html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
	$html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
	$html = preg_replace( '/title=[\'"]([^\'"]+)[\'"]/i', '', $html );
	$html = preg_replace( '/<a href=".+">/', '', $html );
	$html = preg_replace( '/<\/a>/', '', $html );
	return $html;
}


add_filter( 'wp_img_tag_add_width_and_height_attr', '__return_false' );



//WordPressでカスタム投稿のアーカイブでの表示件数を指定する方法
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
  return;
  if ( $query->is_post_type_archive('blog') ) {
    $query->set( 'posts_per_page', '9' );
  }
  if ( $query->is_post_type_archive('work') ) {
    $query->set( 'posts_per_page', '6' );
  }
  if ( $query->is_tax('programming') ) {
    $query->set( 'posts_per_page', '9' );
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );





//シングルページのページネーションにクラス名を付与する
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="page-numbers prev" href=', $output);
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );

function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="page-numbers next" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );



