<?php 
    session_start();
    $result=session_destroy();
    
    if($result){
        ?>
        <script>
			alert("You're signed out now.");
			location.replace("./main.php");
        </script>
        <?php 
    }
?>
<meta http-equiv="refresh" content="0;url-signIn.php" />