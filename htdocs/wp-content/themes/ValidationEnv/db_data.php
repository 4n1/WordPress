<?php
/*
Template Name: DBデータ取得
*/
?>
<?php
    // タイトル(検索キーワード)
    $title = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // 検索結果メッセージ
    $message = (isset($_GET['keyword']) && (!$title))
             ? "タイトルを入力してください。"
             : "";
    // wpdbオブジェクト
    global $wpdb;
    // デバッグ用
    $wpdb->show_errors();

    // 検索キーワードが設定されている場合、DBへの検索を実行する。
    if ($title) {
        $sql = $wpdb->prepare("SELECT a.article_id, a.title, a.description,
                                        a.category, a.url, a.page_size
                                FROM   $wpdb->article a
                                WHERE  a.title LIKE %s
                                ORDER BY a.title",
                        '%'.$title.'%');
        $rows = $wpdb->get_results($sql);
        $message = (!$rows)
            ? "該当するタイトルが見つかりませんでした。"
            : count($rows)."件のタイトルが見つかりました。";
    }

    // 検索結果を表示
    if ($rows) {
        foreach ($rows as $row) {
            echo "<p>【".$row->title."】</p>";
            echo "<p>".$row->description."</p>";
        }
    }
?>

<!-- タイトル検索フォーム -->
<form class="" id="" role="search" action"./" method="get">
    <div>
        <label for="txtSearch">タイトル検索</label>
        <input class="" id="txtSearch" type="text" name="keyword"
            placeholder="検索したいタイトルを入力してください。"
            value="<?php echo $title; ?>" />
        <input id="btnSearch" class="btnSearch" type="submit" value="検索" />
    </div>
</form>

<!-- 検索結果メッセージ -->
<p>
<?php echo $message; ?>
</p>
