<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FARME | Custom</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style-custom.css" />
    <link rel="stylesheet" href="js/scrollCue.css" />

    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--JQueryPlugin-->
    <script src="js/jquery.bgswitcher.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/scrollCue.min.js"></script>
    <script src="js/vendors/scrolloverflow.min.js"></script>
    <script src="js/vendors/easings.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.0.0/jquery.inview.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <!--m+-->
    <link
      rel="stylesheet"
      type="text/css"
      href="http://mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css"
    />

    <!--Poiret One-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet" />

    <!--slide-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>

    <!--chara-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--横スクロール-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="js/infiniteslide.js"></script>
    <script src="js/jquery.pause.min.js"></script>

    <!-- 3D, ar.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>

    <script type="module" src="3D/model.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/110/three.js"></script>
    <script src="https://raw.githack.com/AR-js-org/AR.js/3.3.2/three.js/build/ar.js"></script>
  </head>

  <body>
    <div class="custom-top">
      <div class="top1"><img src="images/model1.png" alt="" /></div>
      <div class="top2"><img src="images/model1.png" alt="" /></div>
      <div class="top3"><img src="images/model1.png" alt="" /></div>

      <a href="index.php"><img src="images/logo.png" alt="logo" class="logo" /></a>

      <div class="main_txt">
        <h1>START<br /><br />YOUR CREATION</h1>
        <p>想いの形を、あなたの傍に。</p>
        <br />
        <h2>心の中のイメージを膨らませてください</h2>
        <p>あなただけの額縁を作っていきましょう。</p>
      </div>
    </div>
    <!--top-->

    <div class="wrap">
      <nav class="nav">
        <div id="steps">
          <ul>
            <li><p href="#step1" class="step" id="st1">Step 1</p></li>
            <li><p href="#step2" class="step" id="st2">Step 2</p></li>
            <li><p href="#step2" class="step" id="st3">Step 3</p></li>
            <li><p href="#step3" class="step" id="st4">Step 4</p></li>
          </ul>
        </div>
      </nav>

      <main class="main">
        <div class="wrapper">
          <div class="section1" id="step1">
            <div class="U-wrap">
              <div class="Ubody">
                <img src="images/Ubody.png" />
                <div class="Uhead">
                  <img src="images/Uhead.png" />
                  <div class="Rear">
                    <img src="images/Rear.png" />
                  </div>
                  <div class="Lear">
                    <img src="images/Lear.png" />
                  </div>
                  <img src="images/eyes.png" />
                </div>
              </div>
            </div>
            <h1 class="subcopy1">Choose your style</h1>
            <ul class="gal">
              <li>
                <h2 class="menuttl1">01</h2>
                <a href="#step2" class="modelicon" id="0"><img src="images/3D1.png" alt="写真1" /></a>
              </li>
              <li>
                <h2 class="menuttl2">02</h2>
                <a href="#step2" class="modelicon" id="1"><img src="images/3D2.png" alt="写真2" /></a>
              </li>
              <li>
                <h2 class="menuttl3">03</h2>
                <a href="#step2" class="modelicon" id="2"><img src="images/3D3.png" alt="写真3" /></a>
              </li>
              <li>
                <h2 class="menuttl4">04</h2>
                <a href="#step2" class="modelicon" id="3"><img src="images/3D4.png" alt="写真4" /></a>
              </li>
            </ul>
            <div class="menu1">
              <div class="balloon1">
                <p>まずは好きな枠の形を選んでね</p>
              </div>
            </div>
          </div>

          <div class="slide-container">
            <div class="left-slide">
              <div>
                <canvas id="c" style="width: 500px; height: 500px"></canvas>
                <div class="imgpreview">
                  <label for="image-preview">画像でプレビュー</label>
                  <label class="switch">
                    <input type="checkbox" name="画像でプレビュー" id="image-preview" value="true" />
                    <span class="slider round"></span>え
                  </label>
                </div>
              </div>
            </div>
            <div class="buttons">
              <div class="buttons-wrap">
                <input type="button" class="action-buttons" id="back-button" value="戻る" />
                <input type="button" class="action-buttons1" id="next-button" value="次へ" />
                <img src="images/reset.png" class="action-buttons2" id="resetBtn" />
                <div class="explain">
                  <div class="exp"><p>最初の状態に戻る</p></div>
                </div>
              </div>
            </div>
            <div class="U-wrapRe">
              <div class="UbodyRe">
                <img src="images/UbodyRe.png" />
                <div class="UheadRe">
                  <img src="images/UheadRe.png" />
                  <div class="RearRe">
                    <img src="images/RearRe.png" />
                  </div>
                  <div class="LearRe">
                    <img src="images/LearRe.png" />
                  </div>
                  <img src="images/eyesRe.png" />
                </div>
              </div>
            </div>

            <div class="right-slide">
              <div id="step2">
                <h1 class="subcopy">Choose your size</h1>
                <div class="options">
                  <div class="inbox3">
                    <p>サイズ：</p>
                    <div class="inbox" id="size-selector">
                      <input type="radio" class="sizebtn" value="sm" name="size" id="small" checked />
                      <label for="small">小</label>
                      <input type="radio" class="sizebtn" value="md" name="size" id="medium" />
                      <label for="medium">中</label>
                      <input type="radio" class="sizebtn" value="lg" name="size" id="large" />
                      <label for="large">大</label>
                    </div>

                    <p>方向：</p>
                    <div class="inbox">
                      <input type="radio" class="directbtn" name="direction" id="tate" />
                      <label for="tate">縦</label>
                      <input type="radio" class="directbtn" name="direction" id="yoko" checked />
                      <label for="yoko">横</label>
                    </div>

                    <div class="inbox" id="moyou-area"></div>
                  </div>
                </div>
              </div>
              <div id="step3">
                <h1 class="subcopy">Choose your color</h1>
                <div class="options">
                  <div class="inbox1">
                    <input class="radio" id="color-1" name="group" type="radio" checked />
                    <input class="radio" id="color-2" name="group" type="radio" />
                    <input class="radio" id="color-3" name="group" type="radio" />
                    <input class="radio" id="color-4" name="group" type="radio" />
                    <div class="tabs" id="tabs">
                      <!-- <label class="tab" id="color-1-tab" for="color-1">外枠</label> -->
                    </div>
                    <div class="panels" id="panels">
                      <!-- <div class="panel" id="color-1-panel">
                        <div class="selectcolor">
                          <div>
                            <div id="color-area"></div>
                            <p>画像アップロード：</p>
                            <input type="file" onChange="imgPreView(event, 'preview1')" class="stepbtn1" id="file1" />
                            <label for="file1">画像選択</label>
                          </div>
                          <div class="uploadimg" id="preview1"></div>
                        </div>
                      </div> -->

                      <!-- <div class="panel" id="color-2-panel">
                        <div class="selectcolor">
                          <div>
                            <div id="color-area"></div>
                            <p>画像アップロード：</p>
                            <input type="file" onChange="imgPreView(event, 'preview2')" class="stepbtn1" id="file2" />
                            <label for="file2">画像選択</label>
                          </div>
                          <div class="uploadimg" id="preview2"></div>
                        </div>
                      </div> -->

                      <!-- <div class="panel" id="color-3-panel">
                        <div class="selectcolor">
                          <div>
                            <div id="color-area"></div>
                            <p>画像アップロード：</p>
                            <input type="file" onChange="imgPreView(event, 'preview2')" class="stepbtn1" id="file2" />
                            <label for="file2">画像選択</label>
                          </div>
                          <div class="uploadimg" id="preview2"></div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <div id="step4">
                <h1 class="subcopy">Preview your frame</h1>
                <div class="options">
                  <div class="inbox2">
                    <h3>「額縁AR」の使い方</h3>
                    <p>
                      ①QRコードをスマホでスキャン！　カメラが起動します。<br />
                      ②指定のARマーカーを、<a
                        href="./images/marker-large.jpeg"
                        target="_blank"
                        rel="noopener noreferrer"
                        >こちら</a
                      >から表示します。<br />
                      <span>※お手元に印刷すると、より確実です。</span><br />
                      ③マーカーにカメラを向けると、 あなたの作った額縁が現れます！
                    </p>

                    <div id="qr"></div>
                    <div data-url="https://kumatech-lab.com"></div>
                    <div class="stepbtns">
                      <button id="arBtn" class="stepbtn">QRコードを生成</button><br />
                      <a href="custom.php"><button id="resetBtn" class="stepbtn">最初から</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="menu2">
              <div class="balloon2">
                <p id="message">次は大きさ、向き、装飾の組み合わせをどれにするか決めてね</p>
              </div>
            </div>
          </div>
        </div>
        <!--wrapper-->
      </main>
    </div>
    <!--wrap-->

    <!--footer-->
    <footer>
      <a href="index.php"><img src="images/logo.png" alt="ロゴ" id="footer_logo" /></a>
      <p class="copyright">Copyright &copy; 2021 FRAME All Rights Reserved.</p>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/chara.js"></script>
    <script src="js/custom.js"></script>

    <!-- 3D script -->
    <script src="3D/three.min.js"></script>
    <script type="module" src="3D/GLTFLoader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
    <script src="js/qrcode.js"></script>

    <script type="module" src="3D/model.js"></script>
  </body>
</html>
