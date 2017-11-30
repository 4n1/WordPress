        <footer>
            <div id="footer">
                <!-- カスタムのナビゲーションメニューを表示させる。 -->
                <?php wp_nav_menu(array('container' => 'nav',
                                        'theme_location' => 'bottomnav')); ?>
                <?php wp_nav_menu(array('container' => 'nav',
                                        'theme_location' => 'footernavl')); ?>
                <?php wp_nav_menu(array('container' => 'nav',
                                        'theme_location' => 'footernavr')); ?>

                <p>Copyright&copy; <a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a> All Rights Reserved.</p>
            </div>
        </footer>

    <?php wp_footer(); ?>
    </body>
</html>
