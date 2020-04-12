<?php
session_start();

$conn = mysqli_connect('localhost', 'root', 'apmsetup', 'cloud');
$email = $_SESSION['email'];
$sql = "select * from user where email ='" . $email . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$name=$row['name'];
$age=$row['age'];
$retAge=$row['retire_age'];
$salary=$row['salary'];
$percent=$row['percent'];
$present_value = (1/1.02)*($retAge - $age);
$pension = $salary * $percent * ((1 - $present_value)/0.02);
?>

<html>
<head>
<title>EditInfo</title>

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

#section#edit_wrap {
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
	width: 403px;
}

#section ul #name {
	background: #f2f2f2;
	width: 403px;
}

#section ul #pw {
	background: #f2f2f2;
	width: 403px;
}

#section ul #age {
	background: #f2f2f2;
	width: 403px;
}

#section ul #retire_age {
	background: #f2f2f2;
	width: 403px;
}

#section ul #salary {
	background: #f2f2f2;
	width: 403px;
}

#section ul #percent {
	background: #f2f2f2;
	width: 403px;
}

#section ul li input {
	width: 100%;
	height: 52px;
	border: 1px #e1e1e1 solid;
	background-size: 20px;
	padding-left: 50px;
	color: #898989;
}

#section #btn dl {
	width: 100%;
	margin-top: 30px;
}

#section #btn dl dd {
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
	<form action="editInfoFunc.php" method="post" autocomplete="off">
	<div id="header">
		<h1>Manage Your Pension Better</h1>
	</div>
	<div id="section">
		<div id="edit_wrap">
			<dl>
				<dt>Edit My Info</dt>
			</dl>
			<ul>
				<li><label for="signin" id="sr-only">Email Address</label><br> 
				<input name="email" id="id" type="text" value="<?= $email?>" readonly>
				</li>
				<li><label for="name" id="sr-only">User Name</label><br>
				<input name="name" id="name" type="text" value="<?= $name?>" readonly>
				</li>
				<li><label for="age" id="sr-only">Age</label><br>
				<input name="age" id="age" type="text" value="<?= $age?>" readonly>
				</li>
				<li><label for="retire_age" id="sr-only">Retirement Age</label><br>
				<input name="retire_age" id="retire_age" type="text"  value="<?= $retAge?>" >
				</li>
				<li><label for="salary" id="sr-only">Salary - £ </label><br>
				<input name="salary" id="salary" type="text" class="require placeholder" value="<?= $salary?>" >
				</li>
				<li><label for="percent" id="sr-only">Saving Percentage % </label><br>
				<input name="percent" id="percent" type="text" value="<?= $percent?>" >
				</li>
			</ul>
			<div class="btn">
				<dl>
					<dd>
						<a href="myInfo.php" class="BtnGray_Dark">Cancel</a>
					</dd>
					<dd>
						<form action="editInfoFunc.php" method="post">
						<input class="BtnRed" type="submit" value="OK"/>
						</form>
					</dd>
				</dl>
			</div>
		</div>

	</div>
</body>

</html>