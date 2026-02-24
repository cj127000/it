<?php

session_start();
$session_id = session_id();

if (isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>  Welcome to PBB House</h2>
    <p>
        Hi <?php echo $_SESSION["username"]; ?>
    </p>

    <a href="logout.php"> </a>
    
</body>
<script> let phpSessionId = "<?php echo $session_id; ?>";
sessionStorage.setItem("PHP_SESSION_ID", phpSessionId);
console.log ("Session ID:", phpSessionId);    
</script>
</html>
