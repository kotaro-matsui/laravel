<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css/style_schedule.css')}}">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<title>塾管理システム</title>
</head>

<body>
<header>
    @include("php/header")
</header>
<main>
	<p class="schedule-title">時間割情報</p>

	<div class="schedule-list">
		<button onclick="location.href={{ asset('registSchedule')}}">登録</button>
		<div class="schedule-table">
			<table border="1" style="table-layout: auto;">
				<tr>
					<th>日付</th>
					<th>時間帯</th>
					<th>ブース名</th>
					<th>講師</th>
					<th>生徒1</th>
					<th>教科</th>
					<th>生徒2</th>
					<th>教科</th>
				</tr>
				<tr>
					<td>2020/6/10</td>
					<td>13:10~14:10</td>
					<td>A1</td>
					<td>藤井　智美</td>
					<td>実原　潤</td>
					<td>国語</td>
					<td>渕田　寛明</td>
					<td>英語</td>
				</tr>
				<tr>
					<td>2020/6/10</td>
					<td>13:10~14:10</td>
					<td>A1</td>
					<td>藤井　智美</td>
					<td>実原　潤</td>
					<td>国語</td>
					<td>渕田　寛明</td>
					<td>英語</td>
				</tr>
				<tr>
					<td>2020/6/10</td>
					<td>13:10~14:10</td>
					<td>A1</td>
					<td>藤井　智美</td>
					<td>実原　潤</td>
					<td>国語</td>
					<td>渕田　寛明</td>
					<td>英語</td>
				</tr>
			</table>
		</div>
	</div>
</main>
</body>
</html>