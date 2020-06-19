<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css/style_classroom.css')}}">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<title>塾管理システム</title>
</head>

<body>
<header>
    @include("php/header")
</header>
<main>
	<p class="classroom-title">教室一覧</p>

	<div class="classroom-list">
		<button onclick="location.href={{ asset('/classroom_regist')}}">登録</button>
		<div class="classroom-table">
			<table border="1"  style="table-layout: auto;">
				<tr>
					<th>教室ID</th>
					<th>教室名</th>
					<th>塾長</th>
					<th>住所</th>
					<th>電話番号</th>
				</tr>
				<tr>
					<td><a href="{{ asset('php/classroom_edit')}}">0001</a></td>
					<td>北新地校</td>
					<td>実原　潤</td>
					<td>大阪府大阪市北区堂島</td>
					<td>06-1234-5678</td>
				</tr>
			</table>
		</div>
	</div>
</main>
</body>
</html>