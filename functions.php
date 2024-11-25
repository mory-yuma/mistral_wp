<?php
function my_enqueue_styles() {
    // wp_enqueue_style('reset', get_template_directory_uri().'/css/reset.css', array(), false, 'all');
    // wp_enqueue_style('common', get_template_directory_uri().'/css/common.css', array('reset'), false, 'all');
    if (is_front_page()) {
        wp_enqueue_style('top', get_template_directory_uri().'/css/top.css', array('common'), false, 'all');
    }
    if (is_page('service')) {
        wp_enqueue_style('service', get_template_directory_uri().'/css/service.css', array('common'), false, 'all');
    }
    if (is_page('overview')) {
        wp_enqueue_style('overview', get_template_directory_uri().'/css/overview.css', array('common'), false, 'all');
    }
    if (is_page('partner')) {
        wp_enqueue_style('partner', get_template_directory_uri().'/css/partner.css', array('common'), false, 'all');
    }
    if (is_page('contact')) {
        wp_enqueue_style('contact', get_template_directory_uri().'/css/contact.css', array('common'), false, 'all');
    }
    if (is_page('policy')) {
        wp_enqueue_style('policy', get_template_directory_uri().'/css/policy.css', array('common'), false, 'all');
    }
  }
  add_action('wp_enqueue_scripts', 'my_enqueue_styles');
//            wp_enqueue_scripts ＝ サイトが開かれた時
?>

<!-- 
get_stylesheet_uri() = style.cssを読み込む

get_template_directory_uri() = 特定のcssファイルを読み込む ↓
wp_enqueue_style('style', get_template_directory_uri().'/○○.css', array(), false, 'all');
-->