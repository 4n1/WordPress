<aside>
<div id="side">

<!-- カスタムのナビゲーションメニューを表示させる。 -->
<?php wp_nav_menu(array('container' => 'nav', 'theme_location' => 'sidebarnav')); ?>

<ul>


<li class="widget">
<ul>
<?php wp_list_categories('title_li=カテゴリー一覧&show_count=1'); ?>
</ul>
</li>


<li class="widget">
<h2>最近の記事</h2>
<ul>
<?php wp_get_archives('type=postbypost&limit=5'); ?>
</ul>
</li>


<li class="widget">
<h2>月別アーカイブ</h2>
<ul>
<?php wp_get_archives('show_post_count=1'); ?>
</ul>
</li>


<li class="widget">
<h2>カレンダー</h2>
<?php get_calendar(); ?>
</li>


<li class="widget">
<h2>キーワード</h2>
<?php wp_tag_cloud('orderby=count&number=30'); ?>
</li>


<li class="widget">
<?php get_search_form(); ?>
</li>


</ul>
</div>
</aside>
