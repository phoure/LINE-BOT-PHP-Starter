<?php
 
$strAccessToken = "fgFWEdG3kij2u4EyyvvzhSPWLCfK8Z2duZ40kmpKgbiIn/HpV6bQe5UgHesnjOa07GizYWFnE0AoDjUnMLj4iEi/PufqScjhbj5QBxDDgeiHm82i9h5zLJ2y9kc0y7+1NlW9CUSbKsUU6X8KUQC26wdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";


$strUrl = "https://api.line.me/v2/bot/message/reply";
  $arrPostData = array();
 $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "join";


$strUrl = "https://api.line.me/v2/bot/message/reply";
  $arrPostData = array();
 $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = 'text';
  $arrPostData['messages'][0]['text'] = $arrJson['events'][0]['source']['groupId'];


/*

$strUrl = "https://api.line.me/v2/bot/message/push";
$arrPostData = array();
$arrPostData['to'] = "C214e858f2c0e42285b5d56a12f0cfced";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message";
 
*/

/*

  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
 
 
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
