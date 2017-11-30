    <header>
        <?php get_template_part('navi'); ?>

        <div id="header">
            <h1>健康ch</h1>
        </div>

        <!-- 健康ch用のナビゲーションメニューを表示させる。 -->
        <?php wp_nav_menu(array('container' => 'nav',
                                'theme_location' => 'headnav-kenko')); ?>
    </header>

