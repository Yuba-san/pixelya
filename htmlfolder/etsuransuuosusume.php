<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ぴくせるや 閲覧数の多いおすすめ</title>
    <link rel="stylesheet" href="https://lit-fortress-24137.herokuapp.com/stylefolder/style.css">
</head>
<body>
    <div id="title" class="title">
        <a href="https://lit-fortress-24137.herokuapp.com"><image class="logo" src="https://lit-fortress-24137.herokuapp.com/image/pixelya-logo.png"></a>
        <image src="https://lit-fortress-24137.herokuapp.com/image/pixelya-header.png" class="header"></image>
        </div>
    <ul class="tab"> <!--tab処理-->
        <li><a>[おすすめ▼]</a>
            <ul>
                <li><a href="shinchakuosusume.html">新着おすすめ</a></li>
                <li><a href="sakushaosusume.html">作者からのおすすめ</a></li>
                <li><b>閲覧数の多いおすすめ</b></li>
            </ul>
        </li>
        <li><a href="riyoukiyaku.html">[利用規約]</a></li>
        <li><a href="sakushanokotoba.html">[作者の言葉]</a></li>
    </ul>
    <div class="sidebar">  <!--左にあるサイドバー-->
        <a class="sponsorlink">スポンサード リンク<br>※スポンサーがいるとは言っていない</a>
        <a href="https://lit-fortress-24137.herokuapp.com" class="sponsorimage">のーいめーじ</a>
        <div class="search">
            <text style="font-size: 24px;">検索</text>
            <p>
                <input type="text" id="search" style="font-family: 'pixel-b'; height: 32px;">
                <input type="button" value="検索" onclick="function_search();" style="font-family: 'pixel-b'; height: 40px;">
            </p>
            <text id="search_text"> </text>
            <div>
                <p>検索のルール</p>
                <p>この検索ツールは基本的に<br>
                まとめの最初の単語<br>
                で検索できます。</p>
                <p style="font-size: 24px;">
                例
                <p style=" font-size: 22px; text-align: right; width: 240px; right: 10px; position: relative;">「国旗のドット絵」X<br>国旗」○</p>
                </p>
            </div>
        </div>
    </div>
    <?php
    $link = 'https://lit-fortress-24137.herokuapp.com/htmlfolder/matomefolder/world-matome-folder/flag/counter-japan-flag.txt';
    $fp = fopen($link, "r");
    $japan_flag = fgets($fp);
    $japan_flag = (int) $japan_flag;
    ?>
    <script>
        let japan_flag = <?php echo json_encode($japan_flag);?>
            max = Math.max(null,japan_flag);
        console.log(max)
    </script>
</body>
</html>