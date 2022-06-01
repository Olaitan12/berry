<?php

    session_start();

    require_once '../../Layout/Comp.php';

    $comps = new Comp;
    $settings = $comps->settings();

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (
            isset($_POST['username']) &&
            isset($_POST['password']) &&
            trim($_POST['username']) != "" &&
            trim($_POST['password']) != "" &&
            strtolower($_POST['username']) == strtolower($settings['Username']) &&
            $_POST['password'] == $settings['Password']
        ) {
            $_SESSION['login'] = 1;
            header("Location: ../");
        } else {
            header("Location: ../login.php");
        }
    } else {
        header("Location: ../login.php");
    }