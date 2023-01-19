<?php

require('function.php');

?>

<?php
$siteTitle = 'ホーム';
require('head.php');
?>

<body class="page-top page-2colum">

    <?php
    require('header.php');
    ?>

    <div id="main">
        <div id="search-box">
            <form action="" method="post">
                <div class="search-category">
                    カテゴリー
                    <select name="" id="">
                        <option value="">ここで検索できます</option>
                        <option value="">スマホ</option>
                        <option value="">自転車</option>
                        <option value="">パソコン</option>
                    </select>
                </div>
                <div class="search-value">
                    表示順
                    <select name="" id="">
                        <option value="">ここで変更できます</option>
                        <option value="">金額が安い順</option>
                        <option value="">金額が高い順</option>
                    </select>
                </div>
                <div class="input-search">
                    <input type="submit" value="検索">
                </div>
            </form>
        </div>

        <div class="show-search-list">
            <div class="result-p">
                <p>120件の商品が見つかりました</p>
                <p>20件/120件中</p>
            </div>
            
            <div class="result-c">
                <section class="panel-img">
                    <a href="product-detail">
                        <img src="img/sample01.jpg" alt="">
                        <div>iPhone6s</div>
                        <div>¥12,300-</div>
                    </a>
                </section>
            </div>
        </div>
    </div>
    <h1>TODO-List</h1>
    <form>
        <input class="task_value" type="text" />
        <button class="task_submit" type="button">Add Task</button>
    </form>

    <?php
    require('footer.php');
    ?>