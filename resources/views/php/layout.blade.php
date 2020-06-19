<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css/style_layout.css')}}">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<title>塾管理システム</title>
</head>

<body>
<header>
	@include("php/header")
</header>
<main>
	<p class="layout-title">レイアウト情報</p>

	<div class="plink">
		<p class="linkpage"><a href="{{ asset('/editBooth')}}" title="座席情報編集">座席情報編集</a></p>
		<p class="linkpage"><a href="{{ asset('/registLayout')}}" title="教室レイアウト画像登録">教室レイアウト画像登録</a></p>
	</div>
</main>
</body>
</html>