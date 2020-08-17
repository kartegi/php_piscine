 <?php
    session_start();
    if ($_GET && $_GET['submit'] == 'OK'){
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passwd'] = $_GET['passwd'];
    }
    if ($_SESSION){
        $login = $_SESSION['login'];
        $passwd = $_SESSION['passwd'];
    } else {
        $login = "";
        $passwd = "";
    }
?>

<html>
    <body>
        <form action="index.php" method="get" name="index.php">
            Username: <input type="text" name="login" value="<?php echo $login; ?>">
            <br />
            Password: <input type="password" name="passwd" value="<?php echo $passwd; ?>">
            <br />
            <input type="submit" name="submit" value="OK">
        </form>
    </body>
</html>



