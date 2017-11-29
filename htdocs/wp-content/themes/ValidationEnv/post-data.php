<?php
require_once( dirname( __FILE__ ) . '/wp-load.php' );

//実行時間の制限値を解除する
set_time_limit(0);

// ユーザーID
$post_author = 1;

// 記事データを用意
$posts_data = array(
  // 1記事目
  array(
    'title' => 'テストタイトル1', // 記事タイトル
    'content' => 'テスト本文1', // 記事本文
    'post_name' => 'スラッグ名1', // スラッグ 
    'category' => array(1,2), // カテゴリID（配列)
    'tags' => array('タグ1','タグ2'), // タグの名前(配列)
    'status' => 'publish', // 公開ステータス
    // postmetaのキーと値
    'postmeta' => array(
      array('key1', '値1'),
      array('key2', '値2')
    )
  ),
  // 2記事目
  array(
    'title' => 'テストタイトル2', // 記事タイトル
    'content' => 'テスト本文2', // 記事本文
    'post_name' => 'スラッグ名2', // スラッグ 
    'category' => array(1,2), // カテゴリID（配列)
    'tags_input' => array('タグ1','タグ2'), // タグの名前(配列)
    'status' => 'publish', // 公開ステータス
    // postmetaのキーと値
    'postmeta' => array(
      array('key1', '値1'),
      array('key2', '値2')
    )
  )
);

//カウント
$i = 0;

// 記事データごとに展開
foreach($posts_data as $key => $post){

  //投稿日時（日本時刻に合わせて投稿ごとに1秒ずつずらす）
  $date = date('Y-m-d H:i:s', strtotime('+'.$i + (9 * 60 * 60).'second'));

  // 記事データを作成
  $post_value = array(
    'post_author' => $post_author, // 投稿者のID
    'post_title' => $post[title],// 投稿のタイトル
    'post_name' => $post[slug], // スラッグ 
    'post_content' => $post[content], // 投稿の本文
    'post_category' => $post[category], // カテゴリーID(配列)
    'tags_input' => $post[tags], // タグの名前(配列)
    'post_status' => $post[status], // 公開ステータス
    'post_type' => 'post', // 投稿タイプ
    'post_date' => $date // 投稿の作成日時
  );
  $insert_id = wp_insert_post($post_value); //$insert_idには投稿のID（「wp_posts」テーブルの「ID」）が入る。 投稿に失敗した場合は0が返る。

  if($insert_id) {
    // postmetaデータごとに展開
    foreach($post[postmeta] as $key => $postmeta){
      // post_metaを作成
      update_post_meta($insert_id, $postmeta[0], $postmeta[1]);
    }// postmetaのループ終了

    // 記事データの作成に成功した場合の処理
    echo ($i + 1).'件目の記事データの作成に成功しました。 '.$post[title].' '.$date.'<br>';

  } else {
    // 記事データの作成に失敗した場合の処理
    echo ($i + 1).'件目の記事データの作成に失敗しました。 '.$post[title].' '.$date.'<br>';
  }

  $i++;

} // 記事データのループ終了
?>
