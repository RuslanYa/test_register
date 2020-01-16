<?php

include 'init.php';

if (isset($_SESSION['id'])){
    header("Location: index.php");die();
}

?>
<a href="index.php">Главная</a> <br>
<?php
echo '<h1>Регистрация</h1>';

if (isset($_POST['password']) and isset($_POST['name']))
{

    $name = $_POST["name"];
    $password =  $_POST["password"];
    $query = "SELECT * FROM users WHERE name = '$name'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $row = mysqli_fetch_assoc($result);



    if (empty($row)){
//        var_dump($row);die();
        $query = "INSERT INTO users (name, password) values('$name', '$password')";
        mysqli_query($link, $query) or die(mysqli_error($link));

        $query = "SELECT * FROM users WHERE name = '$name'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];

        echo 'Логин успешно обновлен';

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
