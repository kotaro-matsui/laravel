<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>

<%@page import="java.sql.*"%>
<%!
// サーブレットのinitメソッドに相当
public void jspInit() {
    try {
        // JDBCドライバをロード
        Class.forName("com.mysql.jdbc.Driver");
    } catch (Exception e) {
        e.printStackTrace();
    }
}
%>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<%@include file="../css/style_user.css" %>
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<title>塾管理システム</title>
</head>

<body>
<header>
	<jsp:include page="header.jsp"/>
</header>
<main>
	<div class="changeButton">
		<p class="usertitle">生徒講師一覧</p>
		<button>生徒</button>
		<button>講師</button>
		<button onclick="location.href='jsp/user_regist.jsp'" class="register">登録</button>
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
	<%
		Connection conn = null;
		Statement st = null;
		ResultSet rs = null;
		try {
			conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/jukumanagedb?characterEncoding=UTF-8&serverTimezone=JST","root","bksroot");
			st = conn.createStatement();
			rs = st.executeQuery("SELECT * FROM user_table");

			while(rs.next()) {
	%>
				<tr>
					<td><%=rs.getString("name")%></td>
					<td><%=rs.getString("grade")%></td>
					<td><%=rs.getString("zipcode")%></td>
					<td><%=rs.getString("address")%></td>
					<td><%=rs.getString("phone")%></td>
				</tr>
	<%
            }
        } catch (Exception e) {
            e.printStackTrace();
        } finally {
            // データベースとの接続をクローズ
            try { rs.close(); } catch (Exception e) {}
            try { st.close(); } catch (Exception e) {}
            try { conn.close(); } catch (Exception e) {}
        }
	%>
<!-- 				<tr> -->
<!-- 					<td><a href="1.html">渕田　寛明</a></td> -->
<!-- 					<td>高校2年生</td> -->
<!-- 					<td>545-1341</td> -->
<!-- 					<td>大阪府大阪市阿倍野区</td> -->
<!-- 					<td>09090009000</td> -->
<!-- 				</tr> -->
<%-- 				<c:forEach var="user" items="${user}"> --%>
<!-- 					<tr> -->
<%-- 					    <th>${user.name }</th> --%>
<%-- 					    <th>${user.grade}</th> --%>
<%-- 					    <th>${user.zipcode}</th> --%>
<%-- 					    <th>${user.address }</th> --%>
<%-- 					    <th>${user.phone}</th> --%>
<!-- 					</tr> -->
<%-- 				</c:forEach> --%>
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