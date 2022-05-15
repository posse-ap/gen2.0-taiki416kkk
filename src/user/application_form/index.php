<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../top/reset.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <h1>就活の教科書</h1>
        <nav>
            <h5>就活やり方</h5>
            <h5>就活やり方</h5>
            <h5>就活やり方</h5>
            <h5>就活やり方</h5>
            <h5>就活やり方</h5>
            <h5>就活やり方</h5>
            <h5>就活やり方</h5>
            <h5>就活やり方</h5>
        </nav>
    </header>

    <div class="title">
        <img src="img/iconmonstr-handshake-7-240.png" alt="">
        <h1>申し込み</h1>
    </div>

    <section class="step">
        <div>
            <span>1</span>
            <h2>申し込みページ</h2>
        </div>
        <div>
            <span class="color">2</span>
            <h2>学生情報入力</h2>
        </div>
        <div>
            <span>3</span>
            <h2>内容確認</h2>
        </div>
        <div>
            <span class="step4">4</span>
            <h2>登録完了</h2>
        </div>    
    </section>


    <section>
        <form method="post" action="./check.php">
            <table class="contact-table">
                <tr>
                    <th class="contact-item">お名前</th>
                    <td class="contact-body">
                        <input type="text" name="name" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">カナ</th>
                    <td class="contact-body">
                        <input type="text" name="katakana" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">Tel</th>
                    <td class="contact-body">
                        <input type="text" name="Tel" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">mail</th>
                    <td class="contact-body">
                        <input type="text" name="mail" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">大学名</th>
                    <td class="contact-body">
                        <input type="text" name="university" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">学部・学科</th>
                    <td class="contact-body">
                        <input type="text" name="faculty" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">卒業年</th>
                    <td class="contact-body">
                        <input type="text" name="graduate" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">住所</th>
                    <td class="contact-body">
                        <input type="text" name="home" class="form-text" />
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">自由記入欄</th>
                    <td class="contact-body">
                        <input type="text" name="free" class="form-text" />
                    </td>
                </tr>
            </table>
            <input class="contact-submit" type="submit" value="内容を確認する" />
        </form>
    </section>

</body>

</html>