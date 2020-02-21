<?php

// Example: 
// https://github.com/nextfusion/line-bot-api-php/blob/master/php/example/chapter-01.php

include ('line-bot-api-php/php/LineBotLibrary.php');

// Line Setting
$channelSecret = '3a8a0da59d62fb313eb2493a94064be2';
$access_token  = 'p3tMahpMNaNoL1CGZqubvt0ni1Q1t1SwTPFvuv+QmWMPBBo+OWLSGL1KHp4cQLeruzpmctPp1abnfkTAqCZtu9ntMkEJg3aM/zMe8gv0I1WkX4nzwFO1zr8EvtLi8Qc1DF6faY5jYcvQNU5+5RQFIQdB04t89/1O/w1cDnyilFU=';

// Enable verify Only
// LineBotLibrary::verify($access_token);

// New Method
$bot = new LineBotLibrary($channelSecret, $access_token);

// Chcek Events
if (!empty($bot->isEvents)) {
    
    // Reply
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

    // Succeeded
    if ($bot->isSuccess()) { echo 'Succeeded!'; exit(); }

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); exit();

}
