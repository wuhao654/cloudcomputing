<?php
$conn = mysqli_connect('localhost', 'root', 'apmsetup', 'cloud');
$userEmail = $conn->real_escape_string($_POST['email']);
$userName = $conn->real_escape_string($_POST['name']);
$userPw = md5($_POST['password']);
$userAge = $_POST['age'];
$userRetAge = $_POST['retire_age'];
$userSalary = $_POST['salary'];
$userPercent = $_POST['percent'];

// Need to add age and salary have only int type of values.

$sql = "SELECT *FROM user WHERE email = '{$userEmail}'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows >= 1) {
    ?>
<script>
    alert("The email address has already been registered.");
	history.back();
    </script>
<?php
    exit();
} elseif (! filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
    ?>
<script>
    alert("The email address is not valid.");
	history.back();
    </script>
<?php
    exit();
}

$sql = "SELECT *FROM user WHERE name = '{$userName}'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows >= 1) {
    ?>
<script>
    alert("The username has already been taken.");
	history.back();
    </script>
<?php
    exit();
}

// Insert Function

$sql = "insert into user(email, password, name, age, retire_age, salary, percent) VALUES('{$userEmail}', '{$userPw}', '{$userName}', '{$userAge}', '{$userRetAge}', '{$userSalary}', '{$userPercent}')";

$result = mysqli_query($conn, $sql);

if ($result == true) {
    ?>
<script>
	alert("Registration comlete.");
	location.href = "signIn.php";
</script>
<?php
} else {
    echo 'Error occured.';
    error_log(mysqli_error($conn));
}
?>