<?php
/**
 * The header for 健康ch
 *
 * @package CACValiEnv
 * @subpackage CACValiEnv
 * @since 1.0
 * @version 1.0
 */
?>
        <div id="logo-kenko" style="margin: -70px 20px 0px 10px;">
            <a href="/wordpress/main/kenko/" style="float: left;">
                <img src="http://localhost/wordpress/wp-content/uploads/2017/11/logo.png"
                    width="150" height="58" alt="健康chのトップページへ戻ります。" />
            </a>
            <div style="font-size: small; padding: 35px 0px 0px 160px; color: gray">
                <p>NHK健康チャンネルで確かな医療・健康情報を</p>
            </div>
        </div>

        <!-- 健康ch用のナビゲーションメニューを表示させる。 -->
        <?php get_template_part( 'template-parts/navigation/navigation', 'top-kenko' ); ?>
