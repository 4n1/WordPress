<?php
/*
Template Name: 個別投稿 Single Post(single.php)のページ
*/
?>

<?php get_header(); ?>

<p>Single Post(single.php)のページ</p>


<?php the_content(); ?>
 
<?php
if(have_posts()):
while(have_posts()): the_post();
?>

<div class="entry">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry_main">
        <?php the_content(); ?>
    </div>
    <p class="state"><?php echo get_the_date(); ?> <?php the_time(); ?>　　カテゴリー： <?php the_category(', '); ?></p>
</div>
<?php endwhile; endif; ?>



<div class="navi">
    <?php next_post_link('%link', '&lt;&lt; %title'); ?>
    │<a href="<?php echo home_url(); ?>">トップ</a>│
    <?php previous_post_link('%link', '%title &gt;&gt;'); ?>
</div>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
