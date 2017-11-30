<?php
/*
Template Name: Category Template(category.php)
*/
?>

<!-- 全画面共通ののヘッダを表示する。 -->
<?php get_header(); ?>
<main>

    <p><?php single_cat_title(); ?>カテゴリー記事の一覧です</p>

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
                ?>

        <h1><?php the_title(); ?></h1>

        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        <p><?php the_category(', '); ?></p>
        <p><?php the_content('Read more'); ?></p>

    <?php
        endwhile;
    endif;
    ?>

    <?php previous_posts_link('新しい投稿ページへ'); ?>
    <?php next_posts_link('古い投稿ページへ'); ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>​
