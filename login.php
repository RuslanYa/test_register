<?php
include 'init.php';

?>
    <a href="index.php">Главная</a> <br>
    <a href="singup.php">Зарегистрироваться</a> <br>
<?php
echo '<h1>Страница входа</h1>';
if (isset($_POST['password']) and isset($_POST['name']))
{

    $name = $_POST["name"];
    $password =  $_POST["password"];
    $query = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $row = mysqli_fetch_assoc($result);
//var_dump($row);die();
    if (!empty($row)){
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];

        header("Location: index.php"); die();
    }


}	else {
    ?>

    <div >
    <form method="POST" style="">
        Имя:
        <input type="text" name="name"><br><br>
        Пароль:
        <input type="password" name="password"><br><br>
        <input type="submit" value="Отправить">
    </form>
    </div>

    <?php
}
?>