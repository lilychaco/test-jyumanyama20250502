<?php
/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
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
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
* CSSとJavaScriptの読み込み
*/
function my_script_init()
{
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('my', get_theme_file_uri(). '/assets/css/styles.css', array(), '1.0.1', 'all');
wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);







/**
* アーカイブタイトル書き換え
*v
* @param string $title 書き換え前のタイトル.
* @return string $title 書き換え後のタイトル.
*/
function my_archive_title( $title ) {

  if ( is_category() ) { // カテゴリーアーカイブの場合
  $title = single_cat_title( '', false );
  } elseif ( is_tag() ) { // タグアーカイブの場合
  $title = single_tag_title( '', false );
  } elseif ( is_post_type_archive() ) { // 投稿タイプのアーカイブの場合
  if ( is_post_type_archive('post') ) {  // デフォルトの投稿タイプのアーカイブの場合
      $title = 'ブログ';
    } else {
      $title = post_type_archive_title( '', false );}
  } elseif ( is_tax() ) { // タームアーカイブの場合
  $title = single_term_title( '', false );
  } elseif ( is_author() ) { // 作者アーカイブの場合
  $title = get_the_author();
  } elseif ( is_date() ) { // 日付アーカイブの場合
  $title = '';
  if ( get_query_var( 'year' ) ) {
  $title .= get_query_var( 'year' ) . '年';
  }
  if ( get_query_var( 'monthnum' ) ) {
  $title .= get_query_var( 'monthnum' ) . '月';
  }
  if ( get_query_var( 'day' ) ) {
  $title .= get_query_var( 'day' ) . '日';
  }
  }
  return $title;
  };
  add_filter( 'get_the_archive_title', 'my_archive_title' );

  /**
* ウィジェットの登録
*
* @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
*/
function my_widget_init() {
  register_sidebar(
  array(
  'name' => 'サイドバー', //表示するエリア名
  'id' => 'sidebar', //id
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-title">',
  'after_title' => '</div>',
  )
  );
  }
  add_action( 'widgets_init', 'my_widget_init' );


// 抜粋文の変更→文字数120→80に変更
function cms_excerpt_more(){
  return '...';
}
add_filter( 'excerpt_more' , 'cms_excerpt_more');
function cms_excerpt_length(){
  return 80;
}
add_filter('excerpt_mblength', 'cms_excerpt_length');

// 抜粋文の変更→文字数を自由に変更
function get_flexible_excerpt($number){
  $value = get_the_excerpt();
  $value = wp_trim_words($value,$number,'...');
  return $value;
}


// HTML、クラス、説明などは既存のサイドバーを参考にしながら自由に変えてください
function create_custom_sidebar() {
  register_sidebars(1,
  array(
    'name' => 'サイドバーお知らせ',
    'id' => 'sidebar-news',
    'description' => 'お知らせのサイドバーのウィジットエリアです。',
    'before_widget' => '<aside id="%1$s" class="widget widget-sidebar widget-sidebar-standard %2$s">',
    'after_widget' => '</aside>',
    'before_title'  => '<h3 class="widget-sidebar-title widget-title">',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'create_custom_sidebar');
//<?php echo get_flexible_excerpt(30); //
