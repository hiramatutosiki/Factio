<!DOCTYPE HTML>
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
            padding-top: 10px;
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
        .btn{
            width: 30%;
            height: 60%;
        }
        .ppp{
            text-align: center;
        }
	.text-center{
		padding-top: 10px;
	}
    </style>
</head>
<body>
<?php
   require_once('header_login.php');
 ?>
    <div class="text-center">
      <h2>新規会員登録</h2>
      </div>
      <div class="container">
  <main>
    <div class="row gx-3 ">
      <div class="col-12 offset-md-3 col-md-6"><!--col-md-7 col-lg-8-->
        <form action="login_confirm.php" method="post" name="myForm" class="validationForm" novalidate>
         <div class="row mb-3">
            <div class="col-12　pb-3">
              <label for="username" class="form-label">氏名</label>
              <input type="text" class="form-control" id="username" name="name">
            </div>
	  </div>
	<div class="row mb-3">
            <div class="col-12">
              <label for="email" class="form-label">メールアドレス</label>
              <input type="text" class="form-control required email" id="email" autocomplete="new-password" size="30" name="mail">
	     </div>
          </div>
	<div class="row mb-3">
            <div class="col-12">
              <label for="pass" class="form-label">パスワード</label>
              <div class="input-group has-validation">
                <input type="password" class="form-control" id="pass" placeholder="" required="" name="pass">
              </div>
	 </div>
      </div>
        <div class="row mb-2">
            <label for="post" class="form-label">住所</label>
	</div>
           <div class="row mb-3">
            <div class="col-6">
              <label for="post" class="form-label">郵便番号</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="post" placeholder="" required="" name="post">
              </div>
            </div>
            <div class="col-6">
              <label for="username" class="form-label">都道府県</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username" placeholder="" required="" name="pre">
              </div>
            </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                <label for="address" class="form-label">市区町村・番地・建物名・号室</label>
                <input type="text" class="form-control" id="address" placeholder="" required="" name="city">
                </div>
	     </div>
	     <div class="row">
                <div class="col-12 ppp">
                    <button class="btn btn-danger btn-lg" onclick="location.href='login_confirm.php'" style="margin-top: 40px;" type="submit">入力確認</button>
                </div>
	      </div>
                <div class="col-12 ppp">
                    <a class="btn btn-outline-danger btn-lg rounded" onclick="location.href='index.php'" style="margin-top: 40px;" >Top</a>
                </div>
            </div>
          </form>
      </div>
  </main>
</div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/highlight.min.js"></script>
  <script>hljs.highlightAll();</script>
</body>
</html>