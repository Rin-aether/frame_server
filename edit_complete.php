<?php
 session_start();
 require('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kabeAR | HOME</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/chara.css">

    <!--m+-->
    <link rel="stylesheet" type="text/css"
        href="http://mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css">
    <link rel="stylesheet" type="text/css"
        href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">


    <!--Poiret One-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">


    <!--slide-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>

    <!--chara-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--横スクロール-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="js/infiniteslide.js"></script>
    <script src="js/jquery.pause.min.js"></script>


</head>

<body>

<!--Password-->

    <div class="changepassword">
        <div class="pass-title">
            <div id="login_area2">
                <img src="images/logo.png" alt="logo" class="passlogo">
                <div class="login_area2_title" id="ttl1">
                    <h1>Profile</h1>
                    <h2>プロフィール更新</h2>
                </div>
            </div>
        </div>
        <div class="pass-pages">
            <div class="login_area2_content" id="ctn4">
                <div class="container">
                    <h2>プロフィールを更新しました。</h2>
                    <p>Your profile is updated!</p>
                    <br>
                    <br>
                    <input type="button" class="completebtn" onclick="location.href='index.php'" value="トップページ"><br>
                    <br>
                    <input type="button" class="completebtn" onclick="location.href='mypage.php'" value="マイページ">
                </div>
            </div>
        </div>
    </div>


    <!--footer-->
    <footer>
        <div id="footer_1">
            <div id="footer_box">
                <img src="images/logo.png" alt="logo" id="footer_logo">
            </div>
            <div id="footer_box">
                <h2>Our features</h2>
                <p>サイト紹介</p>
                <h2>Gallery</h2>
                <p>商品集</p>
                <h2>Our team</h2>
                <p>メンバー紹介</p>
                <h2>Our techs</h2>
                <p>使用技術</p>
            </div>
            <div id="footer_box">
                <h2>SNS</h2>
                <p>Twitter</p>
                <p>Instagram</p>
                <p>Facebook</p>
                <p>Youtube</p>
            </div>
            <div id="footer_box">
                <h2>Access</h2>
                <p>連絡先</p>
                <p>〒168-000</p>
                <p>東京都新宿区○○ HALTOKYO</p>
            </div>
        </div>

        <div id="footer_2">
            <p class="copy">AllCopyright &copy; farmeteam</p>
        </div>
    </footer>


    <!--chara-->

    <div id="chara"></div>

    <div id="popup_area">
        <a href="mypage.php">
            <h2>My page</h2>
            <p>マイページ</p>
        </a>

        <h2 class="QA">Q&A</h2>
        <p>よくある質問</p>

        <h2 class="contact">Contact</h2>
        <p>お問い合わせ</p>
        <div class="batu">
            ×
        </div>
    </div>

    <!---->

    <div id="popup_area2">
        <div id="popup_area2_box1">
            <a href="mypage.php">
                <h2>My page</h2>
                <p>マイページ</p>
            </a>

            <h2 class="QA">Q&A</h2>
            <p>よくある質問</p>

            <h2 class="contact">Contact</h2>
            <p>お問い合わせ</p>
        </div>
        <div id="popup_area2_box2">
            <h1>Q&A</h1>
        </div>
        <div id="popup_area2_box3">
            <div class="batu">
                ×
            </div>
        </div>
    </div>

    <!---->

    <div id="popup_area3">
        <div id="popup_area2_box1">
            <a href="mypage.php">
                <h2>My page</h2>
                <p>マイページ</p>
            </a>

            <h2 class="QA">Q&A</h2>
            <p>よくある質問</p>

            <h2 class="contact">Contact</h2>
            <p>お問い合わせ</p>
        </div>


        <div id="popup_area2_box2">
            <h1>Content Us</h1>
            <h2>お問い合わせ</h2>
            <div id="popup_area2_box2_1">
            <form action="contact.php" method="POST">
                    <div id="popup_category">
                        <p>カテゴリ</p>
                        <select name="subject" id="subject" class="popup_select">
                            <option value="サンプル1">選択肢のサンプル1</option>
                            <option value="サンプル2">選択肢のサンプル2</option>
                            <option value="サンプル3">選択肢のサンプル3</option>
                            <option value="サンプル4">選択肢のサンプル4</option>
                            <option value="サンプル5">選択肢のサンプル5</option>
                        </select>
                    </div>
                    <div id="popup_title">
                        <p>タイトル</p>
                        <input type="text"  name="text" id="text"value="<?php echo htmlspecialchars($_POST['text'],ENT_QUOTES); ?>">
                    </div>
                    <div id="popup_textarea">
                        <p>お問い合わせ内容</p>
                        <textarea name="body" id="body" cols="30" rows="10" value="<?php echo htmlspecialchars($_POST['body'],ENT_QUOTES); ?>"></textarea><br>
                    </div>
                    <input type="submit" class="popup_submit">
                </form>
            </div>
        </div>


        <div id="popup_area2_box3">
            <div class="batu">
                ×
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(window).on('load', function () {
            $('.infiniteslide1').infiniteslide();
        });
    </script>
    <script type="text/javascript" src="js/slide.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/chara.js"></script>
    <script src="js/index.js"></script>

</body>

</html>