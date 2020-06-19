<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css/style_registUser.css')}}">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<title>塾管理システム</title>
</head>

<body>
<!--<%
    // Servletのデータ受け取り
    request.setCharacterEncoding("UTF8");
    String outMessage = (String) request.getAttribute("outMessage");
%>-->
<header>
    @include("php/header")
</header>
<main>
	<p class="user_title">生徒・講師登録</p>

	<div class="message">
<!--		<c:if test="${!empty outMessage}" >
			<c:out value="${outMessage}" />
		</c:if>-->
	</div>
	<br>
	<div class="user_info">
		<form action="UserRegist" method="POST">
		    <table border="1" >
 			    <tr>
		            <td align="center" bgcolor="#C0C0C0">ユーザーID</td>
		            <td align="left" bgcolor="#E6E1FF">
					<input type="text" name="loginId" size=40></td>
		        </tr>
		        <tr>
		            <td align="center" bgcolor="#C0C0C0">氏名</td>
		            <td align="left" bgcolor="#E6E1FF">
					<input type="text" name="name" size=40></td>
		        </tr>
		        <tr>
		            <td align="center" bgcolor="#C0C0C0">区分</td>
		            <td align="left" bgcolor="#FFFFFF">
		                <input type="radio" name="type" value="student">生徒
		                <input type="radio" name="type" value="teacher">講師</td>
		        </tr>
		        <tr>
		            <td align="center" bgcolor="#C0C0C0">学年</td>
		            <td align="left" bgcolor="#E6E1FF">
	                	<select name="grade">
	                  		<option value=""></option>
						    <option value="小学1年生">小学1年生</option>
						    <option value="小学2年生">小学2年生</option>
						    <option value="小学3年生">小学3年生</option>
						    <option value="小学4年生">小学4年生</option>
						    <option value="小学5年生">小学5年生</option>
						    <option value="小学6年生">小学6年生</option>
						    <option value="中学1年生">中学1年生</option>
						    <option value="中学2年生">中学2年生</option>
						    <option value="中学3年生">中学3年生</option>
						    <option value="高校1年生">高校1年生</option>
						    <option value="高校2年生">高校2年生</option>
						    <option value="高校3年生">高校3年生</option>
							<option value="浪人生">浪人生</option>
					  </select>
		        </tr>
		        <tr>
		            <td align="center" bgcolor="#C0C0C0">郵便番号</td>
		            <td align="left" bgcolor="#FFFFFF">
		                <input type="text" name="zipcode" size=10 value="">
		            </td>
		        </tr>
    			    <tr>
		            <td align="center" bgcolor="#C0C0C0">住所</td>
		            <td align="left" bgcolor="#FFFFFF">
		                <textarea name="address" rows="4" cols="40"></textarea>
		            </td>
		        </tr>
		        <tr>
		        <td align="center" bgcolor="#C0C0C0">電話番号	</td>
		        <td align="left" bgcolor="#E6E1FF">
		                <input type=text name="phone" size=16>
		                <font size=2>(半角英数)</font>
	            	</td>
	        	</tr>
	    	</table>
	    	<p class="submitbutton">
				<input type="submit" value=" 登録 ">
			</p>
		</form>
	</div>
</main>
</body>
</html>