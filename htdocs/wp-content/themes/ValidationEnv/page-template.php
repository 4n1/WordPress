<?php
/*
Template Name: テンプレート
*/
?>

<!-- 全画面共通ののヘッダを表示する。 -->
<?php get_header(); ?>

<!-- <div id="container"> -->
<div id="content" class="widecolumn">
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post();?>
            <div class="post">
                <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
                <div class="entrytext">
                    <?php the_content('<p class="serif">このページの続きを読む &raquo;</p>'); ?>
                </div>
            </div>
    <?php
        endwhile;
    endif;
    ?>
    <?php edit_post_link('この記事を編集', '<p>', '</p>'); ?>
</div>


<div id="main">
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>

    <h2>月別アーカイブ</h2>
    <ul>
        <?php wp_get_archives('type=monthly'); ?>
    </ul>

    <h2>カテゴリー別アーカイブ</h2>
    <ul>
        <?php wp_list_cats(); ?>
    </ul>
</div>

<?php get_footer(); ?>
