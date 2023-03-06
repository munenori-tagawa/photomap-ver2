<?php
session_start();
require_once('../funcs.php');
loginCheck();

$title = '';
$content = '';

if (isset($_SESSION['post']['title'])) {
    $title = $_SESSION['post']['title'];
}

if (isset($_SESSION['post']['content'])) {
    $content = $_SESSION['post']['content'];
}

// if (isset($_SESSION['post']['lonlat'])) {
//     $content = $_SESSION['post']['lonlat'];
// }


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>記事管理</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">ブログ画面へ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="post.php">投稿する</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">投稿一覧</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logout.php">ログアウト</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- // もしURLパラメータがある場合 -->
    <!--<?php if (isset($_GET['error'])) : ?>
        <p class='text-danger'>記入内容を確認してください。</p>
    <?php endif ?>-->

    <form method="POST" action="confirm.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">タイトル</label>
            <input type="text" class="form-control" name="title"
            id="title" aria-describedby="title"
            value="<?= $title ?>">
            <div id="emailHelp" class="form-text">※入力必須</div>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">記事内容</label>
            <textArea type="text" class="form-control" name="content"
            id="content" aria-describedby="content"
            rows="4" cols="40"><?= $content ?></textArea>
            <div id="emailHelp" class="form-text">※入力必須</div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">画像</label>
            <input type="file" name="img">
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11658.82209449191!2d141.3507553!3d43.0686606!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2974d2c3f903%3A0xa5e2b18cdd4a47a5!2z5pyt5bmM6aeF!5e0!3m2!1sja!2sjp!4v1678069863929!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="mb-3">
            <label for="lonlat" class="form-label">緯度経度</label>
            <input type="text" class="form-control" name="lonlat"
            id="lonlat" aria-describedby="lonlat"
            value="<?= $title ?>">
            <div id="emailHelp" class="form-text">※任意入力</div>
        </div>

        <button type="submit" class="btn btn-primary">投稿する</button>
    </form>
</body>
</html>