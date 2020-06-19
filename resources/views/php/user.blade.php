<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css/style_user.css')}}">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<title>塾管理システム</title>
</head>

<body>
<header>
    @include("php/header")
</header>
<main>
    
    @section('content')
    <table>
        <tr><th>氏名</th><th>学年</th><th>郵便番号</th></tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->grade}}</td>
            <td>{{$user->zipcode}}</td>
        </tr>
        @endforeach
    </table>
    @endsection
    
	<div class="changeButton">
            <p class="usertitle">生徒講師一覧</p>
            <input type=button name=type value=生徒>
            <input type=button name=type value=講師>
            <!--<button onclick="location.href={{asset('registUser')}}" class="register">登録</button>-->
            <button onclick="location.href='{{asset('registUser')}}'" class="register">登録</button>
	</div>

	<div class="roster">
		<div class="student-table">
			<table border="1" style="table-layout: auto;">
				<tr>
					<th>氏名</th>
					<th>学年</th>
					<th>郵便番号</th>
					<th>住所</th>
					<th>電話番号</th>
				</tr>
				<tr>
					<td><a href="1.html">渕田　寛明</a></td>
					<td>高校2年生</td>
					<td>545-1341</td>
					<td>大阪府大阪市阿倍野区</td>
					<td>09090009000</td>
				</tr>
				<c:forEach var="user" items="${user}">
					<tr>
					    <th>${user.name }</th>
					    <th>${user.grade}</th>
					    <th>${user.zipcode}</th>
					    <th>${user.address }</th>
					    <th>${user.phone}</th>
					</tr>
				</c:forEach>
			</table>
		</div>
		<div class="teacher-table">
			<table border="1" style="table-layout: auto;">
				<tr>
					<th>氏名</th>
					<th>郵便番号</th>
					<th>住所</th>
					<th>電話番号</th>
				</tr>
				<tr>
					<td><a href="1.html">松井　康太朗</a></td>
					<td>545-1341</td>
					<td>大阪府大阪市北区</td>
					<td>09090009001</td>
				</tr>
			</table>
		</div>
	</div>
</main>
</body>
</html>