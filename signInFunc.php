<?php
$conn = mysqli_connect('localhost', 'root', 'apmsetup', 'pension');

$userEmail = $_POST['email'];
$userPw = $_POST['password'];
$sql = "select * from user where email ='" . $userEmail . "' AND password = '" . $userPw . "'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($userEmail === $row['email'] && $userPw === $row['password']){
    session_start();
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    //need to change to myInfo.php after implementing.
    echo ("<script>location.href='myInfo.php';</script>");
}else {
    ?>
<script>
				alert("Email or Password is wrong.");
				history.back();
        	</script>
<?php
}
?>