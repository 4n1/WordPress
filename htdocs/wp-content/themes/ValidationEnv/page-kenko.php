<?php
/*
Template Name: Single Page 健康ch(page-kenko.php)
*/
?>
<!-- 全画面共通のヘッダを表示する。 -->
<?php get_header(); ?>
<!-- 健康ch用のヘッダを表示する。 -->
<?php get_header('kenko'); ?>

<div id="container">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
        <div class="entry">
            <h2><?php the_title(); ?></h2>
            <p>Single Page 健康ch(page-kenko.php)のページ</p>

            <div class="entry_main">
                <?php the_content(); ?>
            </div>


            <p class="state">
                <?php echo get_the_date(); ?> <?php the_time(); ?>
            </p>
        </div>
    <?php
            endwhile;
        endif;
    ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
