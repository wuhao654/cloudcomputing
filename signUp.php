<!DOCTYPE html>
<html>

<head>
<meta charset="ISO-8859-1">
<title>Sign Up</title>
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

#section dl dd {
	font-size: 15px;
	color: #868686;
}

#section ul {
	margin-top: 20px;
	width: 100%;
}

#section ul li {
	text-align: left;
}

#section ul li {
	margin-bottom: 10px;
}

#section ul li input {
	padding-left: 20px;
	background: #f2f2f2 url(../img/common/essential_bg.png) no-repeat right
		0px;
}

#section ul #id {
	background: #f2f2f2;
	width: 350px;
}

#section ul #name {
	background: #f2f2f2;
	width: 350px;
}

#section ul #pw {
	background: #f2f2f2;
	width: 350px;
}

#section ul #age {
	background: #f2f2f2;
	width: 350px;
}

#section ul #retire_age {
	background: #f2f2f2;
	width: 350px;
}

#section ul #salary {
	background: #f2f2f2;
	width: 350px;
}

#section ul #percent {
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

#section #id_pw dl {
	width: 100%;
	margin-top: 30px;
}

#section #id_pw dl dd {
	float: left;
	height: 52px;
	width: 100%;
	padding-right: 5px;
}

a.BtnGray_Dark, .BtnGray_Dark {
	text-align: center;
	font-weight: 600;
	background: #7e8083;
	border: 1px #707274 solid;
	color: #7e8083;
	font-size: 15px;
	width: 87%;
	display: block;
	height: 52px;
	line-height: 52px;
	color: #fff
}

a.BtnGray_Dark:hover, .BtnGray_Dark:hover {
	background: #767575
}

a.BtnRed, .BtnRed {
	text-align: center;
	font-weight: 600;
	background: #bc162c;
	border: 1px #ae1429 solid;
	color: #fff;
	width: 87%;
	font-size: 15px;
	display: block;
	height: 52px;
	line-height: 52px;
	margin-top: 15px
}

a.BtnRed:hover, .BtnRed:hover {
	background: #d81e36
}
</style>
</head>


<body>
	<form action="signUpFunc.php" method="post" autocomplete="off">
		<div id="header">
			<h1>Manage Your Pension Better</h1>
		</div>

		<div id="section">
			<div id="login_wrap">
				<dl>
					<dt>Sign Up</dt>
				</dl>
				<ul>
					<li><label for="signin" id="sr-only"></label> <input name="email"
						id="id" type="text" class="require placeholder"
						style="ime-mode: disabled;" placeholder="Email Address" required />
					</li>
					<li><label for="name" id="sr-only"></label> <input name="name"
						id="name" type="text" class="require placeholder"
						placeholder="User Name" required /></li>
					<li><label for="password" class="sr-only "></label> <input
						name="password" id="pw" type="password" class="require"
						style="ime-mode: disabled;"
						placeholder="Password (8 characters minimum)" minlength="8"
						pattern="[A-Za-z0-9]+" autocomplete="off" required /></li>
					<li><label for="age" id="sr-only"></label> <input name="age"
						id="age" type="number" min="18" max="110"
						class="require placeholder" placeholder="Age (18+)" required /></li>
					<li><label for="retire_age" id="sr-only"></label> <input name="retire_age"
						id="retire_age" type="number" min="40" max="110"
						class="require placeholder" placeholder="Retirement Age" required /></li>	
					<li><label for="salary" id="sr-only"></label> <input name="salary"
						id="salary" type="number" min="1000" class="require placeholder"
						placeholder="Salary (minimum £1,000) " required /></li>
					<li><label for="percent" id="sr-only"></label> <input name="percent"
						id="percent" type="number" min="1" max="100"
						class="require placeholder" placeholder="Saving Percentage(1-100%)" required /></li>
				</ul>

				<!-- We don't need extra function
			<span>
				<label for="password" class="sr-only ">Password Check</label>
				<input name="user_pw_confirm" type="password" class="require" style="ime-mode:disabled;"
					placeholder="Password Check">
			</span>
			</li>
			<li id="pwQuestions">
				Questions
				<select name="pw_questions">
					<option>-select-</option>
					<option>What's the memorable place</option>
					<option>What's the name of your primary school</option>
					<option>The City you were born</option>
					<option>What's your pet name</option>
				</select>
			-->

				<!-- Password Questions -->


				<div class="id_pw">
					<dl>
						<dd>
							<a href="signIn.php" class="BtnGray_Dark">Cancel</a>
						</dd>
						<dd>
							<input class="BtnRed" type="submit" value="Register">
					
					</dl>
				</div>
			</div>
		</div>
	</form>
</body>

</html>