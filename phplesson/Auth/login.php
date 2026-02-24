<?php
session_start();
$session_id = session_id();

if (isset ($_SESSION[$session_id])) {
    header("Location: welcome.php");
    exit();
}  


$users = [
    "admin"=> "1234",
    "CJ"=> "pass123",
    "student1"=> "abc123",
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION['username'] = $username;

        header ("Location: welcome.php");
        exit();
    }else {
       echo"engkkkk";
    }
    
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
    <h2> Log in</h2>

    <form method="POST">
        Username: <input type="text"name="username" required><br><br>
        Password: <input type="password0"name="password" required><br><br>
    </form>
    <script> 
    let phpSessionId = "<?php echo $session_id; ?>";
    sessionStorage.setItem ("PHP_SESSION_ID", phpsessionId);
</script>
    
</body>
</html>