<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css/style_classroom_dit.css')}}">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<title>塾管理システム</title>
</head>

<body>
<header>
    @include("php/header")
</header>
<main>
	<p class="classroom-title">教室情報編集</p>

	<div class="classroom_info">
		教室ID<input value="0001" readonly="readonly"><br>
		教室名<input><br>
		塾長<input><br>
		住所<input><br>
		電話番号<input><br>
	</div>
	<button>登録</button>
</main>
</body>
</html>