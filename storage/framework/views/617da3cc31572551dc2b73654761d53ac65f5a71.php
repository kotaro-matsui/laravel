<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
<!-- 	ログイン画面だけ別ヘッダー利用 -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style_login.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
    <title>塾管理システム</title>
</head>

<body>
<header>
<!-- 	ログイン画面だけ別ヘッダー利用 -->
	<div class="header-logo">
		<img class="logo" alt="ロゴ" src="<?php echo e(asset('/img/headerLogo.png')); ?>">
	</div>
	<div class="header-title">
		<span class="title">塾管理システム </span>
	</div>
	<div class="header-menu">
	</div>
</header>
<main>
	<div class="message">
	</div>
	<form action="LoginCheck" method="POST">
		<div class="loginForm">
			<p class="plogin">
				<input type="text" name="loginId" placeholder="ID">
			</p>
			<p class="plogin">
				<input type="password" name="loginPw" placeholder="パスワード">
			</p>
		</div>
		<div class="plink">
<!-- 			<p class="linkpage"><a href="index.jsp" title="ログイン">ログイン</a></p> -->
			<input type="submit" value="ログイン">
		</div>

	</form>
</main>
</body>
</html>