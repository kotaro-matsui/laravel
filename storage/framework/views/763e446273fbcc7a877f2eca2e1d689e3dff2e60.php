<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo e(asset('css/style_attend.css')); ?>">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<title>塾管理システム</title>
</head>

<body>
<header>
    <?php echo $__env->make("php/header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
<main>
	<p class="attend-title">出欠情報</p>

	<div class="attend-list">
		<button onclick="location.href=<?php echo e(asset('php/attendRegist')); ?>>登録</button>
		<div class="attend-table">
			<table border="1" style="table-layout: auto;">
				<tr>
					<th>日付</th>
					<th>時間帯</th>
					<th>ブース名</th>
					<th>講師</th>
					<th>出欠</th>
					<th>生徒1</th>
					<th>出欠</th>
					<th>生徒2</th>
					<th>出欠</th>
				</tr>
				<tr>
					<td>2020/6/10</td>
					<td>13:10~14:10</td>
					<td>A1</td>
					<td>藤井　智美</td>
					<td>出席</td>
					<td>実原　潤</td>
					<td>遅刻</td>
					<td>渕田　寛明</td>
					<td>欠席</td>
				</tr>
			</table>
		</div>
	</div>
</main>
</body>
</html>