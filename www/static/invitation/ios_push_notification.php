<?php

    $passphrase = 'epluggappApple2014';
    $certificat = 'ck.pem';

    $ctx = stream_context_create();
    stream_context_set_option($ctx, 'ssl', 'local_cert', $certificat );
    stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

    // Open a connection to the APNS server
    $fp = stream_socket_client(
            'ssl://gateway.sandbox.push.apple.com:2195', $err,
            $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);

    if ($fp)
    {
        $body['aps'] = array(
                    'alert' => $message,
                    'sound' => 'default'
                    );

            $payload = json_encode($body);
            $msg = chr(0) . pack('n', 32) . pack('H*', str_replace(' ', '', $regId)) . pack('n', strlen($payload)) . $payload;
            $result = fwrite($fp, $msg, strlen($msg));
            
            if (!$result){
                    $msg = 'Message not delivered' . PHP_EOL;
            }else{
                    $msg = 'Message successfully delivered' . PHP_EOL;
            }
            fclose($fp);
    }



