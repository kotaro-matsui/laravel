<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo e(asset('css/style_layout.css')); ?>">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<title>塾管理システム</title>
</head>

<body>
<header>
	<?php echo $__env->make("php/header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
<main>
	<p class="layout-title">レイアウト情報</p>

	<div class="plink">
		<p class="linkpage"><a href="<?php echo e(asset('/editBooth')); ?>" title="座席情報編集">座席情報編集</a></p>
		<p class="linkpage"><a href="<?php echo e(asset('/registLayout')); ?>" title="教室レイアウト画像登録">教室レイアウト画像登録</a></p>
	</div>
</main>
</body>
</html>