<?php

function debug($var){	
     // หาที่มาและบรรทัดของไฟล์ที่เรียกใช้ฟังก์ชัน debug 
     $trace = reset(debug_backtrace());	
     $trace['file'] = str_replace(str_replace('/','\\',$_SERVER['DOCUMENT_ROOT']).'\\','',$trace['file']);	
     echo $trace['file']." (line ".$trace['line'].")<br/>";	

     // แสดงค่าที่เก็บในตัวแปร
     echo "<pre>";
     print_r($var);
     echo "</pre>";
     return $var;	
}

function curl($url){

$token = 'BQCOEAoTy6AdHu10B2FQ3cnhYtqXfGuoLXmMfoAAtiqbRa-Ix-iP2-46PJvVoucnCFEYFlBpUS_6plESyrsPCht3BMvfEvyoB_QdKKJit2FbAlBwoZO8EgvKCgnVu4cjZkjv6Lb1kooJFIfXhiRJW7ZKxxK4FT7rMykKvHFGNoI2e_L39wPCe1L8YGciqzEkvhdAAMIwW4FZNzz2RgmaiQJMNMVybWryJyxiWpElnDAmoqVoO4laf4_cFPLdyWmK2zOWZjgyN_4';

$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => $url,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
	    "authorization: Bearer $token",
	    "cache-control: no-cache",
	    "content-type: application/json",
	    "postman-token: 33061140-458f-d87d-084b-82467074ae2a"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);
	return json_decode($response, true);
}

$aritst_id = '5pokGZ1K9Hr6etaKPDxSG8';
$c_artist = curl('https://api.spotify.com/v1/artists/'.$aritst_id);

	 $artist[] = $aritst_id;
	 $artist[] = $c_artist['name'];
	 $artist[] = $c_artist['images'][0]['url'].'++++'.$c_artist['images'][1]['url'].'++++'.$c_artist['images'][2]['url'];
	 $artist[] = $c_artist['popularity'];
	 $artist[] = $c_artist['followers']['200822'];

	  for ($r = 0; $r <= count($c_artist['genres'])-1; $r++) {
	    $c_artist_genres[] = $c_artist['genres'][$r];
	  }
	  $artist[] = join('++++',$c_artist_genres);
	  unset($c_artist_genres);

	  
for ($a = 0; $a <= ceil(curl('https://api.spotify.com/v1/artists/'.$aritst_id.'/albums?include_groups=album%2Csingle&market=TH&limit=5&offset=0')['total']/5); $a++) {
	 $oset = $a*5;
	 $c_album = curl('https://api.spotify.com/v1/artists/'.$aritst_id.'/albums?include_groups=album%2Csingle&market=TH&limit=5&offset='.$oset);

	for ($x = 0; $x <= count($c_album['items'])-1; $x++) {
		

		for ($w = 0; $w <= count($c_album['items'][$x]['artists'])-1; $w++) {
		   $artist_list_id[] = $c_album['items'][$x]['artists'][$w]['id'];
		   $artist_list_name[] = $c_album['items'][$x]['artists'][$w]['name'];
		}
		$album[] = join('**',$artist_list_id);
		$album[] = join('**',$artist_list_name);
		unset($artist_list_id); unset($artist_list_name);
		$album[] = $c_album['items'][$x]['id'];
		$album[] = $c_album['items'][$x]['name'];
		$album[] = $c_album['items'][$x]['images'][0]['url'].'++++'.$c_album['items'][$x]['images'][1]['url'].'++++'.$c_album['items'][$x]['images'][2]['url'];
		$album[] = $c_album['items'][$x]['album_type'];
		$album[] = $c_album['items'][$x]['release_date'];
		$albums[] = join('////',$album);
		unset($album);

		$c_song = curl('https://api.spotify.com/v1/albums/'.$c_album['items'][$x]['id'].'/tracks?market=TH&limit=50&offset=0');
		for ($s = 0; $s <= count($c_song['items'])-1; $s++) {

			for ($g = 0; $g <= count($c_song['items'][$s]['artists'])-1; $g++) {
				$artist_song_id[] = $c_song['items'][$s]['artists'][$g]['id'];
				$artist_song_name[] = $c_song['items'][$s]['artists'][$g]['name'];
			}

			$song[] = join('**', $artist_song_id);
			$song[] = join('**', $artist_song_name);
	  		unset($artist_song_id);  unset($artist_song_name);
			$song[] = $c_album['items'][$x]['id'];
			$song[] = $c_album['items'][$x]['name'];
			$song[] = $c_song['items'][$s]['id'];
			$song[] = $c_song['items'][$s]['name'];
			$song[] = $al_type;
			$song[] = $c_song['items'][$s]['track_number'];
			$song[] = $c_song['items'][$s]['duration_ms'];
			$song[] = $c_song['items'][$s]['preview_url'];
			$song[] = $c_song['items'][$s]['explicit'];

			$songs[] = join('++++',$song);
			unset($artist_list);
			unset($song);
		}
		$songss[] = join('///',$songs);
		unset($songs);
	}
}

	$all = join('////',$artist).'---'.join(';;',$albums).'---'.join(';;',$songss);

echo $all;


