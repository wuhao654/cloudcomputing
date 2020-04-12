<?php 
session_start();

$conn = mysqli_connect('localhost', 'root', 'apmsetup', 'cloud');
$email = $_SESSION['email'];
$userRetAge = $_POST['retire_age'];
$userSalary = $_POST['salary'];
$userPercent = $_POST['percent'];


// if(!empty($userRetAge) && !empty($userSalary) && !empty($userPercent)){
$sql = "UPDATE user SET retire_age='{$userRetAge}', salary='{$userSalary}', percent='{$userPercent}' WHERE email = '{$email}'";
mysqli_query($conn, $sql);
// }
?>

<script>
	alert("Editting comlete.");
	location.href = "myInfo.php";
</script>
