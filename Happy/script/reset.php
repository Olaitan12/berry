<?php

    session_start();

    if (
        !isset($_SESSION['login']) ||
        !$_SESSION['login']
    ) {
        die(header("Location: ../login.php"));
    }

    if (
        !isset($_GET['page'])
    ) {
        die(header("Location: ../"));
    }

    fputs(fopen("../../Export/key/kill.txt", "w+"), "");
    fputs(fopen("../../Export/key/live.txt", "w+"), "");
    $_SESSION['success'] = "Successfully reset all logs.";
    if ($_GET['page'] == "home") {
        header("Location: ../");
    } elseif ($_GET['page'] == "anti") {
        header("Location: ../antibot.php");
    } elseif ($_GET['page'] == "settings") {
        header("Location: ../settings.php");
    }