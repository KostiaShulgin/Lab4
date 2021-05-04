<?php


class Get
{
    private static $_instance = null;

    private function __construct()
    {
// приватный конструктор ограничивает реализацию getInstance ()
    }

    static public function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }


    function __get($page)
    {
        return $_GET[$page];
    }
}
?>
<link rel="stylesheet" href="navstyle.css" type="text/css">
<br>
<?php
session_start();
if (empty($_SESSION['user'])) {

    $name = $_POST['name'] ?? '';
    $pass = $_POST['pass'] ?? '';

    if ($name != '' || $pass != '')
    {
        if ($name === '')
            die("ERROR: Please enter the username!");

        if ($pass === '')
            die("ERROR: Please enter the password!");

        if ($name == "Konstantin" && $pass == "14_Nudapu") {


            $_SESSION['user'] = 'Kostia';
            setcookie("username", $_POST['name'], time()+(84600*30));
            header('Location: navpage.php');
            exit;
        }
        else {
            die("ERROR: Incorrect username or password!");
        }
    }

    // no submitted data, display form:
    ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Username: <input type="text" name="name" value="<?php echo $_COOKIE['username']?>"><br>
            Password: <input type="password" name="pass"><br>
            <input type="submit" value="Log In">
        </form>

<?php
}
else {
    // info about current user is stored in session, welcome this user:

    require 'Header.php';

    $get = Get::getInstance();
    $page = $get -> page;
    $page = htmlspecialchars($page);

    require "$page.php";
}




?>

