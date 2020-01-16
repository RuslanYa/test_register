<?php
include 'init.php';

if (!isset($_SESSION['id'])){
    header("Location: index.php");die();
}




if ( isset($_POST['name']))
{
    $oldName = $_SESSION['name'];
    $newName = $_POST['name'];
    $query = "UPDATE users SET name = '$newName'  WHERE name = '$oldName'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $_SESSION['name'] = $newName;
    header('Location: index.php');

}else {
    ?>


    <a href="logout.php">Разлогиниться</a> <br>
    <a href="index.php">Главная</a> <br>

    <div style="  margin-top: 10rem; margin-left: 20rem">
        <form method="POST" style="">
            Введите новое имя:<br>
            <input type="text" name="name"><br>

            <input type="submit" value="Отправить">
        </form>
    </div>

    <?php
}
?>