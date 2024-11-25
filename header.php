<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <title><?php echo bloginfo('name');?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head();?>
</head>
<body>
    <header>
        <h1 class="header_logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/header_logo.png" alt="ロゴ"></a></h1>
        <nav class="pc_nav">
            <ul class="list_nav_header">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('service') )); ?>">サービス</a></li>
                <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('overview') )); ?>">会社概要</a></li>
                <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('partner') )); ?>">パートナー募集</a></li>
                <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('contact') )); ?>">お問い合わせ</a></li>
            </ul>
        </nav>
        <div class="burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
    <div class="sp_menu">
        <nav class="sp_nav">
        <ul class="">
            <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('service') )); ?>">サービス<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt=""></a></li>
            <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('overview') )); ?>">会社概要<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt=""></a></li>
            <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('partner') )); ?>">パートナー募集<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt=""></a></li>
            <li><a href="<?php echo esc_url(get_permalink( get_page_by_path('contact') )); ?>">お問い合わせ<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt=""></a></li>
        </ul>
        </nav>
    </div>