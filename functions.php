<?php

if (! function_exists('theme_setup')):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override theme_setup() in a child theme, add your own theme_setup to your child theme's
 * functions.php file.
 */
function theme_setup() {
  add_theme_support('automatic-feed-links');

  register_nav_menus(array(
    'primary' => __('Primary Menu'),
  ));

  add_theme_support('post-thumbnails');
}
endif;

/**
 * Tell WordPress to run theme_setup() when the 'after_setup_theme' hook is run.
 */
add_action('after_setup_theme', 'theme_setup');

/**
 * Register widgetized area and update sidebar with default widgets
 */
function widgets_init() {
  register_sidebar(array(
    'name' => __('Sidebar 1'),
    'class' => 'sidebar-1',
    'description' => __('An optional sidebar area'),
    'before_widget' => '<aside class="widget %1$s %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ));

  register_sidebar(array(
    'name' => __('Sidebar 2'),
    'class' => 'sidebar-2',
    'description' => __('An optional sidebar area'),
    'before_widget' => '<aside class="widget %1$s %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ));

  register_sidebar(array(
    'name' => __('Sidebar 3 (Footer)'),
    'class' => 'sidebar-3',
    'description' => __('The footer content'),
    'before_widget' => '<aside class="widget %1$s %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ));

  register_sidebar(array(
    'name' => __('Sidebar 4 (Footer)'),
    'class' => 'sidebar-4',
    'description' => __('An optional footer sidebar area'),
    'before_widget' => '<aside class="widget %1$s %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ));

  register_sidebar(array(
    'name' => __('Sidebar 5 (Footer)'),
    'class' => 'sidebar-5',
    'description' => __('An optional footer sidebar area'),
    'before_widget' => '<aside class="widget %1$s %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ));
}
add_action('init', 'widgets_init');

if (!function_exists('posted_on')) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own posted_on to override in a child theme
 */
function posted_on() {
  printf(__('<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a>', 'toolbox'),
    esc_url(get_permalink()),
    esc_attr(get_the_time()),
    esc_attr(get_the_date('c')),
    esc_html(get_the_date()),
    esc_url(get_author_posts_url(get_the_author_meta('ID'))),
    esc_attr(sprintf(__('View all posts by %s', 'toolbox'), get_the_author())),
    esc_html(get_the_author())
  );
}
endif;

/**
 * Returns true if a blog has more than 1 category */
function is_categorized_blog() {
  if (false === ($all_cats = get_transient('all_cats'))) {
    // Create an array of all the categories that are attached to posts
    $all_cats = get_categories(array(
      'hide_empty' => 1,
    ));

    $all_cats = count($all_cats);

    set_transient('all_cats', $all_cats);
  }

  if ('1' != $all_cats) return true;

  return false;
}

/**
 * Flush out the transients used in is_categorized_blog
 */
function category_transient_flusher() {
  // Like, beat it. Dig?
  delete_transient('all_cats');
}
add_action('edit_category', 'category_transient_flusher');
add_action('save_post', 'category_transient_flusher');

/**
 * Load the scripts
 */
/**
 * Proper way to enqueue scripts and styles
 */
function rmpoe_scripts() {
  /* Deregister the initial ones */
  wp_dequeue_style('screen');
    wp_deregister_style('screen');
    wp_dequeue_script('site');
    wp_deregister_script('site');
  wp_dequeue_script('style');
    wp_deregister_script('style');

  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Montserrat:700,400|Lora:400,400italic,700');
}
add_action('wp_enqueue_scripts', 'rmpoe_scripts');

/**
 * Remove the god damned emoji scripts
**/
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * This theme was built with PHP, Semantic HTML, CSS, love, and a Toolbox.
 */
