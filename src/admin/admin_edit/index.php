<?php
session_start();
if(isset($_GET['btn_logout']) ) {
	unset($_SESSION['user_id']);
    unset($_SESSION['time']);
    // header("Location: " . $_SERVER['PHP_SELF']);
}
if (isset($_SESSION['user_id']) && $_SESSION['time'] + 60 * 60 * 24 > time()) {
    $_SESSION['time'] = time();

    if (!empty($_POST)) {
        $stmt = $db->prepare('INSERT INTO events SET title=?');
        $stmt->execute(array(
            $_POST['title']
        ));

        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/admin/top.php');
        exit();
    }
} else {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/admin/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<bod>
    <header>
        <div class="header_top">
            <h1>管理者画面</h1>
            <form method="get" action="">
                <img src="../img/iconmonstr-log-out-16-240 (1).png" alt="">
                <input type="submit" name="btn_logout" value="ログアウト">
            </form>
        </div>
    <div class="header_bottom">
        <ul>
            <li><a href="../top.php" class="page_focus">トップ</a></li>
            <li><a href="../admin_student/index.php">ユーザー管理</a></li>
            <li><a href="../admin_company/index.php">企業管理</a></li>
            <li><a href="../admin_submit/index.php">新規エージェンシー</a></li>
        </ul>
    </div>
    </header>

<div class="page_head">
    <a href="../admin_company/index.php">企業情報</a>
    <p>></p>
    <a href="../admin_edit/index.php" class="detail_focus">編集ページ</a>
</div>

<div class="page_change">
    <button onclick="change_company()">企業情報を編集</button>
    <button onclick="change_agency()">担当者情報を編集</button>
</div>

<section>
    <div id="company">
        <h2>企業情報編集</h2>
        <form action="">
            <table class="contact-table">
                <tr>
                    <th class="contact-item">企業名</th>
                    <td class="contact-body">
                        <input type="text" name="企業名" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">企業画像ファイル</th>
                    <td class="contact-body">
                        <input type="text" name="file" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">公式サイトurl</th>
                    <td class="contact-body">
                        <input type="text" name="url" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">見出し</th>
                    <td class="contact-body">
                        <input type="text" name="見出し" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">アピールポイント</th>
                    <td class="contact-body">
                        <input type="text" name="appeal" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">内定実績</th>
                    <td class="contact-body">
                        <input type="text" name="内定実績" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">掲載者数</th>
                    <td class="contact-body">
                        <input type="text" name="掲載者数" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">内定最短</th>
                    <td class="contact-body">
                        <input type="text" name="内定最短" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">実績</th>
                    <td class="contact-body">
                        <input type="text" name="実績" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">サービスの手順1</th>
                    <td class="contact-body">
                        <input type="text" name="step1" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">サービスの手順2</th>
                    <td class="contact-body">
                        <input type="text" name="step2" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">サービスの手順3</th>
                    <td class="contact-body">
                        <input type="text" name="step3" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">掲載期限</th>
                    <td class="contact-body">
                        <input type="text" name="limit" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">タグ</th>
                    <td id="input_pluralBox">
                        <div id="input_plural">
                            <!-- <input type="text" class="form-control" placeholder="サンプルテキストサンプルテキストサンプルテキスト"> -->
                            <div class="cp_ipselect form-control">
                                <select id="choice" class="cp_sl02" onchange="inputChange()" required>
                                <!-- <option value="" hidden disabled selected></option> -->
                                <option value="1">トップページ画面</option>
                                <option value="2">詳細ページ画面</option>
                                <option value="3">契約情報</option>
                                </select>
                                <span class="cp_sl02_highlight"></span>
                                <span class="cp_sl02_selectbar"></span>
                                <!-- <label class="cp_sl02_selectlabel">閲覧するページを選ぶ</label> -->
                                <input type="button" value="＋" class="add pluralBtn">
                                <input type="button" value="－" class="del pluralBtn">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="submit_section">
                <input class="contact-submit" type="submit" value="送信" />
                <a href="delete.html"><img src="../img/iconmonstr-trash-can-9-240.png" alt=""></a>
            </div>
        </form>
    </div>

    <div id="agency">
        <h2>担当者情報編集</h2>
        <form action="">
            <table class="contact-table">
                <tr>
                    <th class="contact-item">企業名</th>
                    <td class="contact-body">
                        <input type="text" name="企業名" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">担当者氏名</th>
                    <td class="contact-body">
                        <input type="text" name="担当者氏名" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">部署名</th>
                    <td class="contact-body">
                        <input type="text" name="部署名" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">担当者Tel</th>
                    <td class="contact-body">
                        <input type="text" name="Tel" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">担当者mail</th>
                    <td class="contact-body">
                        <input type="text" name="mail" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">パスワード</th>
                    <td class="contact-body">
                        <input type="text" name="password" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">パスワード<br>(確認用)</th>
                    <td class="contact-body">
                        <input type="text" name="password" class="form-text" />
                    </td>
                </tr>
            </table>
            <div class="submit_section">
                <input class="contact-submit" type="submit" value="送信" />
                <a href="delete.html"><img src="../img/iconmonstr-trash-can-9-240.png" alt=""></a>
            </div>
        </form>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>
    
</bod>
</html>