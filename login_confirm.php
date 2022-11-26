<!DOCKTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        }

        body {
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            padding-top: 150px;
        }

        .form-signin {
          width: 100%;
          max-width: 400px;
          padding: 15px;
          margin: auto;
        }

        .form-signin .form-floating:focus-within {
          z-index: 2;
        }

        .form-signin input[type="email"] {
          margin-bottom: -1px;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
          margin-bottom: 30px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }
        .Form{
            text-align : center;
        }
        /* エラーメッセージのスタイル */
        .error {
          width : 100%;
          padding: 0;
          display: inline-block;
          font-size: 90%;
          color: red;
          box-sizing: border-box;
        }
        .btn{
            width: 300px;
            height: 80px;
        }
        .ppp{
            text-align: right;
        }
        .btns{
            width: 70px;
            height: 35px;
        }
        .pp{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="text-center">
      <h2>新規会員登録</h2>
      <h3 style="margin-top: 50px;">以下の内容で登録しますか？</h3>
    </div>
      <div class="container">
  <main>
    <div class="row">
      <div class="col-6">
        <p class="ppp">氏名</p>
      </div>
      <div class="col-6">
        <?php
        echo $_POST['name'];
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <p class="ppp">メールアドレス</p>
      </div>
      <div class="col-6">
        <?php
        echo $_POST['mail'];
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <p class="ppp">パスワード</p>
      </div>
      <div class="col-6">
        <input type="password" id="input_pass" name="input_pass" value="<?php echo $_POST['pass'];?>" disabled>
	    <button class="btn btn-secondary btn-sm btns" id="btn_passview">表示</button>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <p class="ppp">住所</p>
      </div>
      <div class="col-6">
        <?php
        echo $_POST['post'];
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-6"></div>
      <div class="col-6">
        <?php
        echo $_POST['pro'];
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-6"></div>
      <div class="col-6">
        <?php
        echo $_POST['city'];
        ?>
      </div>
      <div class="col-12 pp">
        <button class="btn btn-danger btn-lg pp" onclick="location.href='login_complete.php'" style="margin-top: 40px;" type="submit" href="login_complete.php">登録</button>
      </div>
      <div class="col-12 pp">
        <button class="btn btn-outline-danger btn-lg pp" onclick="location.href='login.php'" style="margin-top: 40px;" type="submit" href="login.php">入力内容を修正する</button>
      </div>
    </div>
  </main>
</div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/highlight.min.js"></script>
  <script>
    window.addEventListener('DOMContentLoaded', function(){
        let btn_passview = document.getElementById("btn_passview");
        let input_pass = document.getElementById("input_pass");

        btn_passview.addEventListener("click", (e)=>{
            e.preventDefault();
            if( input_pass.type === 'password' ) {
                input_pass.type = 'text';
                btn_passview.textContent = '非表示';
            } else {
                input_pass.type = 'password';
                btn_passview.textContent = '表示';
            }
        });
    });
  </script>
</body>
</html>
