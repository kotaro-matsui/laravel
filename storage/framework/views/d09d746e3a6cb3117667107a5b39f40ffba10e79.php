<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo e(asset('css/style_index.css')); ?>"
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<title>塾管理システム</title>
</head>

<body>
<header>
    <?php echo $__env->make("php/header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
<main>
	<div class="plink">
		<p class="linkpage"><a href="<?php echo e(asset("layout")); ?>" title="教室レイアウト登録">教室レイアウト登録</a></p>
		<p class="linkpage"><a href="<?php echo e(asset("schedule")); ?>" title="時間割作成">時間割作成</a></p>
		<p class="linkpage"><a href="<?php echo e(asset("user")); ?>" title="生徒・講師一覧">生徒・講師一覧</a></p>
		<p class="linkpage"><a href="<?php echo e(asset("attend")); ?>" title="出欠情報">出欠情報</a></p>
		<p class="linkpage"><a href="<?php echo e(asset("classroom")); ?>" title="教室情報">教室情報</a></p>
	</div>
</main>
</body>
</html>