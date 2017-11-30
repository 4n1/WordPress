<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>">
    <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta http-equiv="content-style-type" content="style/css">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <?php get_template_part('navi'); ?>

        <div id="header">
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>

        <!-- 全画面共通のグローバル・ナビゲーション・メニューを表示させる。 -->
        <?php wp_nav_menu(array('container' => 'nav',
                                'theme_location' => 'headnav')); ?>
    </header>
