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
<body>
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

<section>
    <div class="page_head">
        <a href="../admin_company/index.html">企業情報</a>
        <p>></p>
        <a href="../admin_invoice/index.html" class="detail_focus">請求情報ページ</a>
    </div><br>
</section>


<div class="section_top">
    <div>
        <h3><form action="">
            <select id="choice" class="cp_sl02" onchange="inputChange()" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            </select>
            </form>月の請求情報</h3>
    </div>
    <div class="section_header">
        <section class="invoice_info">
            <h2>お申し込み学生数</h2>
            <h2 class="number">30人</h2>
            <h2>請求金額</h2>
            <h2 class="number">19800円</h2>
        </section>
    </div>
</div>


<div class="section_content">
    <div class="side">
        <div class="agent_name">
            <h3 class="company_name">企業名</h3>
            <form action=""><h2><input class="big_search_space" type="text" placeholder="企業名を入力してください" value="マイナビ"></h2></form>
        </div>
        <section class="section_side">
            <div>
                <h3>請求日:<br><span>2022-10-10</span></h3>
                <h3>支払期日:<br><span>2022-10-10</span></h3>
            </div>
            <button>情報文書化</button>
        </section>
    </div>

    <div class="main_box">
        <form class="search_container">
            <p><input class="search_space" type="text" placeholder="氏名を入力してください"></p>
            <p><input class="search_button" type="submit" value="検索"></p>
        </form>
        
        
        <div class="section_main">
            <div class="wrap">
                <table>
                    <thead>
                        <tr>
                            <th scope="col" class="middle">お名前</th>
                            <th scope="col" class="wide">メールアドレス</th>
                            <th scope="col">電話番号</th>
                            <th scope="col">大学名</th>
                            <th scope="col">学部学科</th>
                            <th scope="col" class="narrow">卒業年</th>
                            <th scope="col" class="wide">住所</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>あああああああ</th>
                            <td class="price">naoki1010nissy@gmail.com</td>
                            <td class="price">090-2066-9112</td>
                            <td class="price">慶應義塾大学</td>
                            <td class="price">経済学部</td>
                            <td class="price">25卒</td>
                            <td class="price">神奈川県川崎市中原区上丸子山王町2-1324-1-201</td>
                        </tr>
                        <tr>
                            <th>西山直輝</th>
                            <td class="price">naoki1010nissy@gmail.com</td>
                            <td class="price">090-2066-9112</td>
                            <td class="price">慶應義塾大学</td>
                            <td class="price">経済学部</td>
                            <td class="price">25卒</td>
                            <td class="price">神奈川県川崎市中原区上丸子山王町2-1324-1-201</td>
                        </tr>
                        <tr>
                            <th>西山直輝</th>
                            <td class="price">naoki1010nissy@gmail.com</td>
                            <td class="price">090-2066-9112</td>
                            <td class="price">慶應義塾大学</td>
                            <td class="price">経済学部</td>
                            <td class="price">25卒</td>
                            <td class="price">神奈川県川崎市中原区上丸子山王町2-1324-1-201</td>
                        <tr>
                            <th>西山直輝</th>
                            <td class="price">naoki1010nissy@gmail.com</td>
                            <td class="price">090-2066-9112</td>
                            <td class="price">慶應義塾大学</td>
                            <td class="price">経済学部</td>
                            <td class="price">25卒</td>
                            <td class="price">神奈川県川崎市中原区上丸子山王町2-1324-1-201</td>
                        </tr>
                        <tr>
                            <th>西山直輝</th>
                            <td class="price">naoki1010nissy@gmail.com</td>
                            <td class="price">090-2066-9112</td>
                            <td class="price">慶應義塾大学</td>
                            <td class="price">経済学部</td>
                            <td class="price">25卒</td>
                            <td class="price">神奈川県川崎市中原区上丸子山王町2-1324-1-201</td>
                        </tr>
                        <tr>
                            <th>西山直輝</th>
                            <td class="price">naoki1010nissy@gmail.com</td>
                            <td class="price">090-2066-9112</td>
                            <td class="price">慶應義塾大学</td>
                            <td class="price">経済学部</td>
                            <td class="price">25卒</td>
                            <td class="price">神奈川県川崎市中原区上丸子山王町2-1324-1-201</td>
                        </tr>
                        <tr>
                            <th>西山直輝</th>
                            <td class="price">naoki1010nissy@gmail.com</td>
                            <td class="price">090-2066-9112</td>
                            <td class="price">慶應義塾大学</td>
                            <td class="price">経済学部</td>
                            <td class="price">25卒</td>
                            <td class="price">神奈川県川崎市中原区上丸子山王町2-1324-1-201</td>
                        </tr>
                        <tr>
                            <th>西山直輝</th>
                            <td class="price">naoki1010nissy@gmail.com</td>
                            <td class="price">090-2066-9112</td>
                            <td class="price">慶應義塾大学</td>
                            <td class="price">経済学部</td>
                            <td class="price">25卒</td>
                            <td class="price">神奈川県川崎市中原区上丸子山王町2-1324-1-201</td>
                        </tr>
                        <tr>
                            <th>西山直輝</th>
                            <td class="price">naoki1010nissy@gmail.com</td>
                            <td class="price">090-2066-9112</td>
                            <td class="price">慶應義塾大学</td>
                            <td class="price">経済学部</td>
                            <td class="price">25卒</td>
                            <td class="price">神奈川県川崎市中原区上丸子山王町2-1324-1-201</td>
                        </tr>
                        <tr>
                            <th>西山直輝</th>
                            <td class="price">naoki1010nissy@gmail.com</td>
                            <td class="price">090-2066-9112</td>
                            <td class="price">慶應義塾大学</td>
                            <td class="price">経済学部</td>
                            <td class="price">25卒</td>
                            <td class="price">神奈川県川崎市中原区上丸子山王町2-1324-1-201</td>
                        </tr>
                        <tr>
                            <th>西山直輝</th>
                            <td class="price">naoki1010nissy@gmail.com</td>
                            <td class="price">090-2066-9112</td>
                            <td class="price">慶應義塾大学</td>
                            <td class="price">経済学部</td>
                            <td class="price">25卒</td>
                            <td class="price">神奈川県川崎市中原区上丸子山王町2-1324-1-201</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</div>






</body>
</html>