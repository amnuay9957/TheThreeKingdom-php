<?php
    $accessToken = "IlGOI1WsMXlV5gRCOx6xE7+Vv1e9bp23WriHHqZMcYqtlilrGQ79JXe8IkXeeRREqBCd5taYXo/mhPnH8GV3Fh7O+ctXbtsCxTYs2qW/SYMWbd18HfNt78oEGMAG5/IQ/32nIn+ru53JSqJUBqJf+QdB04t89/1O/w1cDnyilFU=
";//copy Channel access token ตอนที่ตั้งค่ามาใส่

    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);

    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";

    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "สวัสดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Sticker"
    else if($message == "ฝันดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "sticker";
        $arrayPostData['messages'][0]['packageId'] = "2";
        $arrayPostData['messages'][0]['stickerId'] = "46";
        replyMsg($arrayHeader,$arrayPostData);
    }
