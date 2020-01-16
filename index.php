<?php

include 'init.php';

if (isset($_SESSION['id'])){
    echo 'Приветствую ' . $_SESSION['name'] .' Вы залогинились.<br>';
    ?>

    <a href="logout.php">Выйти</a> <br>
    <a href="update.php">Обновить логин/пароль</a> <br>

    <?php
    echo '<h1>Главная</h1><br>';
}else{

    ?>
    <br>
    <a href="singup.php">Зарегистрироваться</a> <br>
    <a href="login.php">Войти</a>
    <?php
    echo '<h1>Главная</h1><br>';
    echo 'Здесь вы можете залогиниться, разлогиниться, поменять логин или пароль.';
}



//
//$query = "SELECT * FROM items WHERE id>0 limit $from, $notesOnPage";
//$result = mysqli_query($link, $query) or die(mysqli_error($link));
//for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
