<?php get_header(); ?>
<main>

<div id="contents">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
    <div class="entry">
        <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <p>index.phpのページ</p>

        <div class="entry_main">
            <?php the_content(); ?>
        </div>
        
        <p class="state">
        <?php echo get_the_date(); ?>
        <?php the_time(); ?>
        カテゴリー: <?php the_category(', '); ?>
        </p>
    </div>
    <?php
        endwhile;
    endif;
    ?>
</div>


<div class="navi">
<?php previous_posts_link('&lt;&lt; 次へ'); ?> | <a href="<?php echo home_url(); ?>">トップ</a> | <?php next_posts_link('前へ &gt;&gt;'); ?>
</div>

</main>
</div>


<!-- アイキャッチ画像を表示させる。 -->
<?php the_post_thumbnail(); ?>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
