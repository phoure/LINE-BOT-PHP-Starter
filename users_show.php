<?php

require 'app_tokens.php';
require 'tmhOAuth.php';

$connection = new tmhOAuth(array(
  'consumer_key'    => $consumer_key,
  'consumer_secret' => $consumer_secret,
  'user_token'      => $user_token,
  'user_secret'     => $user_secret
));



  $connection->request('GET', $connection->url('1.1/statuses/show'), array(
  'id' => '997998885665628160', 'tweet_mode' => 'extended'));
          
                
// Get the HTTP response code for the API request
$response_code = $connection->response['code'];

// Convert the JSON response into an array
$response_data = json_decode($connection->response['response'],true);

// A response code of 200 is a success
if ($response_code <> 200) {
  print "Error: $response_code\n";
}

       $max = array(intval($response_data['extended_entities']['media'][0]['video_info']['variants'][0][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][1][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][2][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][3][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][4][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][5][bitrate]));

echo $maxs = array_search(max($max), $max);

$response_code = $connection->response['code'];

// Convert the JSON response into an array
$response_data = json_decode($connection->response['response'],true);

//print_r( $response_data);
// A response code of 200 is a success
if ($response_code <> 200) {
  print "Error: $response_code\n";
}

	
								echo $response_data['extended_entities']['media'][0]['video_info']['variants'][0]['url'];

?>