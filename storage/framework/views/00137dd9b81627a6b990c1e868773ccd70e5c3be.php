<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo e(asset('css/style_registLayout.css')); ?>">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<title>塾管理システム</title>
</head>

<body>
<header>
    <?php echo $__env->make("php/header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
<main>
	<p class="layout-title">レイアウト画像登録</p>
	<input type="file">

	<select name="menuList">
	<option value="scheduleList">時間割一覧</option>
	<option value="userList">生徒講師一覧</option>
	<option value="logout">ログアウト</option>
	</select>
</main>
</body>
</html>