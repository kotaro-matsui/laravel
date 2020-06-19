<style>

body{
	font-family: 'Lato', 'Noto Sans JP', 'ヒラギノ角ゴ ProN', 'Hiragino Kaku Gothic ProN', 'メイリオ', Meiryo, 'ＭＳ Ｐゴシック', 'MS PGothic', sans-serif;
}

.pclass{
	color:red;
}

header{
	width:100%;
	height:50px;
	background: linear-gradient(to right, white,green );
}

.header-logo{
	width:50px;
	float:left;
}
.logo{
	padding:5px 5px 0 0;
	height:40px;
}

.header-title{
	text-align:center;
	float:center;
}

.title{
	font-size:30px;
	color:black;
}

.header-menu{
	width:50px;
	float:right;
	text-align:right;
}

.menu{
	padding:5px 5px 5px 0px;
	height:40px;
	float:right;
}

</style>
	<div class="header-logo">
		<a href="{{ asset("index")}}"><img class="logo" alt="ロゴ" src="{{ asset('/img/headerLogo.png')}}"></a>
	</div>
	<div class="header-title">
		<span class="title">塾管理システム </span>
                <img class="menu" alt="メニュー" src="{{ asset('/img/menu.jpg') }}">
	</div>
	<div class="header-menu">
	</div>