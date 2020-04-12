<!DOCTYPE html>
<html>

<head>
<meta charset="ISO-8859-1">

<title>Sign In</title>

<!-- Google Sign-in API -->
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id"
	content="232402241161-bpfhl29h8fin03n4ancglsoh3tgqcbtv.apps.googleusercontent.com">

<!-- CSS -->
<style>
#header {
	background-color: lightgrey;
	height: 100px;
}

#section {
	width: 500px;
	background: #fff;
	border: 1px #e1e1e1 solid;
	text-align: center;
	margin: 80px auto 0;
	border-radius: 7px;
}

#header, #section {
	text-align: center;
}

#header {
	line-height: 100px;
}

#section {
	line-height: 40px;
}

#section#login_wrap {
	padding: 50px 30px 30px;
}

#section dl dt {
	font-size: 35px;
	color: #bc162c;
	font-weight: 700;
	padding-bottom: 20px;
}

#section ul {
	margin-top: 20px;
	width: 100%;
}

#section ul li {
	text-align: left;
}

#section ul #id {
	background: #f2f2f2;
	width: 350px;
}

#section ul #pw {
	background: #f2f2f2;
	width: 350px;
}

#section ul li input {
	width: 100%;
	height: 52px;
	border: 1px #e1e1e1 solid;
	background-size: 20px;
	padding-left: 50px;
	color: #898989;
}

#section p {
	line-height: 25px;
	color: #868686;
	padding-bottom: 0px;
	position: relative;
	text-align: left;
	margin-top: 5px;
}

#section p input {
	margin-right: 10px;
	margin-top: 5px;
	display: inline-block;
}

#section p label:after {
	content: '';
	top: 4px;
	left: 1px;
	display: inline-block;
	position: absolute;
	width: 20px;
	height: 20px;
	background: url(../img/common/unchek_bg.gif) no-repeat;
	z-index: 1
}

#section p label .pointColor {
	color: #bc162c;
	font-weight: 700;
	padding-left: 10px;
}

#section p input:checked+label:after {
	background: url(../img/common/onchek_bg.gif) no-repeat 0 0
}

#section #loginBtn #submit {
	display: block;
	line-height: 52px;
	margin-top: 0px;
	width: 100%;
	height: 52px;
	background: #bf162c;
	color: #fff;
	cursor: pointer;
	border: 0px;
	font-size: 20px;
	font-weight: 700;
}

#section #loginBtn #submit:hover {
	background: #d81e36;
}

#section #loginBtn {
	margin-top: 10px;
}

#id_pw {
	text-align: left;
	font-size: 13px;
}

#id_pw #hidden-xs {
	margin-right: 20px;
}

#id_pw #hidden-xs:before {
	width: 28px;
	height: 28px;
	margin-right: 5px;
	content: '';
	position: relative;
	display: inline-block;
	top: 10px;
	background: url(../img/common/ico_find.png) no-repeat;
}

#id_pw #id_icon {
	display: none;
	margin-right: 20px;
}

#id_pw #id_icon:before {
	width: 28px;
	height: 28px;
	margin-right: 5px;
	content: '';
	position: relative;
	display: inline-block;
	top: 10px;
	background: url(../img/common/ico_find.png) no-repeat;
}

#id_pw a {
	color: #bc162c;
}

#id_pw .bar {
	margin: 0 8px;
	display: inline;
	color: #dcdcdc;
	font-size: 13px;
}

#login_area #id_pw dl {
	width: 100%;
	margin-top: 30px;
}

#login_area #id_pw dl:after {
	content: '';
	clear: both;
	display: block;
}

#login_area #id_pw dl dt {
	line-height: 130%;
	font-size: 14px;
	color: #868686;
	font-weight: normal;
	margin-top: 30px;
}

#login_area #id_pw dl dd {
	float: left;
	height: 52px;
	width: 50%;
	padding-right: 5px;
}

#google_signIn_area {
	border-top: 1px #e1e1e1 solid;
	padding: 10px 0;
}

#register {
	padding: 15px 50px;
	background: #f5f5f5;
	text-align: center;
}

#register #regiNow {
	color: #868686;
}

#register #regiNow a {
	display: block;
	max-width: 180px;
	margin: 10px auto 0;
	border-radius: 3px;
	background: #bf162c;
	color: #fff;
	height: 40px;
	line-height: 40px;
	font-size: 16px;
}

#register #regiNow a:hover {
	background: #d81e36;
}
</style>
</head>

<body>
	<form action="signInFunc.php" method="post">
		<div id="header">
			<h1>Manage Your Pension Better</h1>
		</div>
		<div id="section">
			<div id="login_wrap">
				<dl>
					<dt>Sign in</dt>
				</dl>

				<ul>
					<li><label class="sr-only" for="login"></label> <input
						name="email" id="id" type="text" placeholder="Email Address"
						value></li>
					<li><label class="sr-only" for="password"></label> <input
						name="password" id="pw" style="-ms-ime-mode: disabled;"
						type="password" placeholder="Password"></li>
				</ul>
				<!--
				<p>
					<input name="save_id" id="save_id" type="checkbox" value="1" />
					<label for="save_id"> Remember me </label>
				</p>
				-->
				<div id="loginBtn">
					<input id="submit" type="submit" value="Sign In">
					<!-- <a href="myInfo.php">Sign in</a> -->
				</div>
				<!-- Don't need Find ID/PW
				<div id="id_pw">
					<span id="hidden-xs">
						Forgot ID or Password?
					</span>
					<i id="id_icon"></i>
					<a href="http://localhost:8080/web01/findID.html">Find ID</a>
					<span id="bar">|</span>
					<a href="http://localhost:8080/web01/findPW.html">Find Password</a>
				</div>
 				-->
				<div id="google_signIn_area">
					<div class="g-signin2" data-onsuccess="onSignIn" data-width="500"
						data-height="60" data-longtitle="true"></div>
				</div>

				<div id="register">
					<div id="regiNow">
						<a href="signUp.php">Register</a>
					</div>
				</div>
			</div>
		</div>

</body>

</html>