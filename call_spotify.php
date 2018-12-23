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

$token = 'BQB96VUehcqbBz4vF--Q9v0zeAQ3QoXQUULLZkLrRKJWC74TECJkaWR8jKTMNN7jpEvakZFLWh1s_4psSR2Ro6hdcT7Oz13JooUb50XN-7XXt26hLTfXacsp5J55Q-a9ei76-1F0mjnDOX-51ubY9aXaWTSkQ3ZP1MYyBma3JtaQHjOZNCMt3Ps5yBI9OmGUwC3E84xilyPFSwsoTRSYRrudY1F6H32TbCywIeHU8vOVmIz5YJ92Piw6b_lA00hR9AwPjpW7Yis';

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


for ($a = 0; $a <= ceil(curl('https://api.spotify.com/v1/artists/5pokGZ1K9Hr6etaKPDxSG8/albums?include_groups=album%2Csingle&market=TH&limit=5&offset=0')['total']/5); $a++) {
	$aa = $a*5;
	$c_artist = curl('https://api.spotify.com/v1/artists/5pokGZ1K9Hr6etaKPDxSG8/albums?include_groups=album%2Csingle&market=TH&limit=5&offset='.$aa);

	for ($x = 0; $x <= count($c_artist['items'])-1; $x++) {
		
		$al_name = $c_artist['items'][$x]['name'];
		$al_type = $c_artist['items'][$x]['album_type'];
		$album[] = $c_artist['items'][$x]['id'].'///'.$al_name.'///'.$al_type.'///'.$c_artist['items'][$x]['images'][0]['url'].'++'.$c_artist['items'][$x]['images'][1]['url'].'++'.$c_artist['items'][$x]['images'][2]['url'].'///'.$c_artist['items'][$x]['release_date'];

		$c_album = curl('https://api.spotify.com/v1/albums/'.$c_artist['items'][$x]['id'].'/tracks?market=TH&limit=50&offset=0');
		for ($s = 0; $s <= count($c_album['items'])-1; $s++) {

			for ($g = 0; $g <= count($c_album['items'][$s]['artists'])-1; $g++) {
				$ar[] = $c_album['items'][$s]['artists'][$g]['id'];
				$ar[] = $c_album['items'][$s]['artists'][$g]['name'];
			}

			$so[] = $c_album['items'][$s]['id'];
			$so[] = $al_name;
			$so[] = $al_type;
			$so[] = $c_album['items'][$s]['name'];
			$so[] = $c_album['items'][$s]['track_number'];
			$so[] = join('+', $ar);
			$so[] = $c_album['items'][$s]['duration_ms'];
			$so[] = $c_album['items'][$s]['preview_url'];
			$so[] = $c_album['items'][$s]['explicit'];

			$song[] = join('++',$so);
			unset($ar);
			unset($so);
		}
		$songs[] = join('///',$song);
		unset($song);
	}
}

	$all = join(';;',$album).'---'.join(';;',$songs);

echo $all;



//echo '1hWhflOpUh3IS1UeYHIW8V///SUN///album///https://i.scdn.co/image/7d6ca19b566c6f796ca5c33b82ae23a6a53f8e72++https://i.scdn.co/image/324241ceb5060504d9b7615ad51a9724f3804e8f++https://i.scdn.co/image/1c0deef7b93933eb562e14da92c802d89e94e213///2018-10-25;;7uw7zlyxl1KO9JIclstj6x///ลาลาลอย (100%)///single///https://i.scdn.co/image/4ea21d13fc9532ed2f7c87d95d4a507f8f3e5ca0++https://i.scdn.co/image/c7d2e21d63248198d46198331bae15bd5093dd25++https://i.scdn.co/image/12b46465941dbec47c5b4ad4bf49d79dc37b2791///2018-10-18;;6dHBxw2D9whZjOeei3jRpf///Say Hi///single///https://i.scdn.co/image/604751850d669df69010eeb011c1d9d610203712++https://i.scdn.co/image/833ad56823613c7d183dd44596aa0a4ce1d1f110++https://i.scdn.co/image/b4f230a9de32a1b784f6eedaa4ea24a7b8f911ff///2018-06-21;;1LFPu0KDYRNUfje5NzVhGC///Stars///single///https://i.scdn.co/image/be8bbfe1d82923183d5ceb892c01c6bb66e3a18b++https://i.scdn.co/image/59e11ae7e8c1d2d3611cd1de0bba7c7735021af8++https://i.scdn.co/image/15c6add63e4d71d1e9599828fd839b38b0f4df5c///2018-06-01;;5X8HO5VUDmxkvtOQsTxHvB///ของขวัญ (Cover Version)///single///https://i.scdn.co/image/c7afb5d3a2bbac51f7cbe09ca2024ca1e575711f++https://i.scdn.co/image/2ff80c5629158582406ae71e2c260c40174aa1af++https://i.scdn.co/image/193725877d2efbbd22fc10af842d0e46b1b2f4ee///2018-04-02;;5Aj6CKV7C5pvnfUhDnh529///ฝันฤดูร้อน///single///https://i.scdn.co/image/f718680fe523b4c330a292bed47b44c12424f1d4++https://i.scdn.co/image/e47a61a9f19dd3a421c1fa661a439c1fd29ff2a9++https://i.scdn.co/image/03c1c9691a4834e9c2fa2cd8b99c6b2dcfdfac4d///2018-03-29;;2yllDQ3NbgiqAQtVmEbhbo///นอนได้แล้ว///single///https://i.scdn.co/image/f993ad220aee6ca0ebd5e10212f3a17046397d2c++https://i.scdn.co/image/bdaa06e3dcb6ee4761dd557b9d0996b9c82e37ce++https://i.scdn.co/image/aaa14a9de60e96ca3262ab20755840ebb3692da2///2018-03-22;;19HjlCBuFbVFaLaltNMj4C///TOY///single///https://i.scdn.co/image/2ba5e8ae9ffd52fac20c3ddf54b9363b147ec444++https://i.scdn.co/image/f94128dd557a81cfa101b54ac3b42ad2f29843fb++https://i.scdn.co/image/f726476969fc26a3b78c7d5304f3ba46f0df47dc///2018-01-25;;5hw3dK4QRlPVWVmuav9o94///04:00///single///https://i.scdn.co/image/0052dee882e0eb384b68a9f3dcf402a515f75556++https://i.scdn.co/image/8225479092f2e28f67a1c29db98e740fd323db83++https://i.scdn.co/image/2a34660ea88ed2ebb5f074006d740aab0c5d4607///2018-01-24;;2hOpETO0Osr9QY2r2irJKN///ก่อนฤดูฝน///single///https://i.scdn.co/image/7d4ee0e80e02e248ab6bf643e856883f1d29fd1b++https://i.scdn.co/image/b6a425d5bd51195d8996e3319da82ad7a3eb0a7b++https://i.scdn.co/image/641ede76a054b569bbb435790cceb29134099444///2017-05-24;;5xobhiY3xCVTslGKMU5zY2///เหมือนหลับตา///single///https://i.scdn.co/image/d5d2081833d9957fae96821553d3346cdc4622ee++https://i.scdn.co/image/f396c1518c337ae01b38d7cc62db34a38d94163b++https://i.scdn.co/image/c2ca9f6ea4880687529d5f5b00694d4b1079968d///2017-01-24;;1d2FuIWABH6LUOanslt559///Who Else?///single///https://i.scdn.co/image/69b6ae6710e81dc7f23660d915f3de3a42b435d2++https://i.scdn.co/image/aee230079d067a077ddb5ae14b421939128e6f63++https://i.scdn.co/image/9c568ad48198f0cfaf9580e8c5a0fd6ee583aa1d///2017-01-08;;7FPFrXZ6VMPdiafC2KvAyE///The Light///single///https://i.scdn.co/image/391521f1eb6542542974bce0b7ca721b5fdc6131++https://i.scdn.co/image/550ee5f63c426e175e45e0316c391b40a94abfd9++https://i.scdn.co/image/addf569a9e2aedb85c3a2406e8b7ee47c0a26770///2016-09-10;;2lTMsDMjTYFFp2NVAMDgtf///I Beg Your Pardon///single///https://i.scdn.co/image/6a4056a7cec31c4940b88419953ba7894a7db188++https://i.scdn.co/image/9274c5e6a75ea8bdae993a7ab3adeacf22ba322b++https://i.scdn.co/image/e80b38f9ec4d8db239939b901c717a91b0d74e59///2016-07-09;;7rqcdx4E30YAGwHiXraxnq///หน้าหนาวที่แล้ว///single///https://i.scdn.co/image/15425a0dfaa9ba1fe79eec6d20b2da365473b162++https://i.scdn.co/image/600e07c93b4f00a0c8d412235b7b5f29a751cdc3++https://i.scdn.co/image/cd049a4b2091ca68949efb052ecf95a8ad93857e///2015-09-02---1ZanPS4zG0fXMKcMN3Rknl++SUN++album++หน้าหนาวที่แล้ว++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++266000++https://p.scdn.co/mp3-preview/750859fd854b2e37494943a4bf6dc0a5d7fabb47?cid=774b29d4f13844c495f206cafdad9c86++///5BS4lRz13ztnSaBy8spQ7W++SUN++album++ก่อนฤดูฝน++2++5pokGZ1K9Hr6etaKPDxSG8+The Toys++160000++https://p.scdn.co/mp3-preview/3c977004c52d871acfd179308ec1ddf6859b1756?cid=774b29d4f13844c495f206cafdad9c86++///1PGNDa8dIRkOQ6VLvNHRdw++SUN++album++4:00++3++5pokGZ1K9Hr6etaKPDxSG8+The Toys++226000++https://p.scdn.co/mp3-preview/3104a7399fd9ddaa8c76766fb7c74724230dd423?cid=774b29d4f13844c495f206cafdad9c86++///2YRHRAT0c0g4WIZjsf9clK++SUN++album++TOY++4++5pokGZ1K9Hr6etaKPDxSG8+The Toys++136000++https://p.scdn.co/mp3-preview/a5446a9ad6d9a4168ae406d880c241a213ba01fb?cid=774b29d4f13844c495f206cafdad9c86++///36QNwsq4EpOdS3E4WEJphO++SUN++album++พูดไม่ออก++5++5pokGZ1K9Hr6etaKPDxSG8+The Toys++158000++https://p.scdn.co/mp3-preview/d64233371f61fa22c188b7dfe69384dd964f5828?cid=774b29d4f13844c495f206cafdad9c86++///5wjLh0SIZGk36IgB8NE74l++SUN++album++นอนได้แล้ว++6++5pokGZ1K9Hr6etaKPDxSG8+The Toys+2MnMuRYL9qsGvWPsZGeDGQ+F.HERO++212000++https://p.scdn.co/mp3-preview/334b3e2bb778a9a71b2a45c90c0e5f56a8ce7901?cid=774b29d4f13844c495f206cafdad9c86++///3f3L2MP4oniV1bmSxGbcW4++SUN++album++ลาลาลอย (100%)++7++5pokGZ1K9Hr6etaKPDxSG8+The Toys++184000++https://p.scdn.co/mp3-preview/6609f14ac50ed45ffa34eefe7fdb962d64be2e9d?cid=774b29d4f13844c495f206cafdad9c86++///2XSTkw6jEvmcYuupPMdJOh++SUN++album++เวลาขับรถ++8++5pokGZ1K9Hr6etaKPDxSG8+The Toys++184000++https://p.scdn.co/mp3-preview/d1b3cb1e69442894a49c3cba6dd4413239ece523?cid=774b29d4f13844c495f206cafdad9c86++///2CsRt5xTyyDmZrupXAULMu++SUN++album++Stars++9++5pokGZ1K9Hr6etaKPDxSG8+The Toys++216000++https://p.scdn.co/mp3-preview/13dbb71d0c6fe57aad229316c62ebfa175cd009b?cid=774b29d4f13844c495f206cafdad9c86++;;0JBAYpl1n0pKfVAbVP7p2C++ลาลาลอย (100%)++single++ลาลาลอย (100%)++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++184000++https://p.scdn.co/mp3-preview/6609f14ac50ed45ffa34eefe7fdb962d64be2e9d?cid=774b29d4f13844c495f206cafdad9c86++;;5l1x5azo0RyYtayqL9nx4o++Say Hi++single++Say Hi++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++195555++https://p.scdn.co/mp3-preview/bb1b2c4e88d9c1b69ba9dab5b96ed2e705e2abdb?cid=774b29d4f13844c495f206cafdad9c86++;;00XqyOkSIiqOygR0kezc4x++Stars++single++Stars++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++164571++https://p.scdn.co/mp3-preview/4d76ed2e246481387b58df5726b499987108b714?cid=774b29d4f13844c495f206cafdad9c86++;;72bifeUJaxwOtGjGiVqAeB++ของขวัญ (Cover Version)++single++ของขวัญ - Cover Version++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++240000++https://p.scdn.co/mp3-preview/933f3516a511eea6b086f64835ae223ca085cca8?cid=774b29d4f13844c495f206cafdad9c86++;;03UCygRxVwn1CyFEA7fiTV++ฝันฤดูร้อน++single++ฝันฤดูร้อน++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++180000++https://p.scdn.co/mp3-preview/beefed4662919eba5a32d051766f79d6f6a351e1?cid=774b29d4f13844c495f206cafdad9c86++;;5JhLoyD2idGlKXwD9nmYuB++นอนได้แล้ว++single++นอนได้แล้ว++1++7qJhAxC0QtSjRPJZlqlx89+Fukking Hero+5pokGZ1K9Hr6etaKPDxSG8+The Toys++217142++https://p.scdn.co/mp3-preview/ad48947f3e7710c4d2b38e3e64a6e993559a8d9e?cid=774b29d4f13844c495f206cafdad9c86++;;2Es5K3EnKVXsGqU8PtZLEL++TOY++single++TOY++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++190476++https://p.scdn.co/mp3-preview/c1bed1a1534a6cd8dd8df86e2ea005103b3aaad0?cid=774b29d4f13844c495f206cafdad9c86++;;3h7TbK7x7yxJavEZydbOzX++04:00++single++04:00++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++226000++https://p.scdn.co/mp3-preview/4a48766b6486bd46d213a6bc803674f35b4cc081?cid=774b29d4f13844c495f206cafdad9c86++;;1oyYuiIundjUzgi0oyBNyB++ก่อนฤดูฝน++single++ก่อนฤดูฝน++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++223777++https://p.scdn.co/mp3-preview/12691b63f6d19e20f3088f316d932210e59a1511?cid=774b29d4f13844c495f206cafdad9c86++;;0Yp32oZXEnqWYL7XBN1mTL++เหมือนหลับตา++single++เหมือนหลับตา++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++245413++https://p.scdn.co/mp3-preview/0a90cc84f9afcec72bc230d4c6b3bb9af463a785?cid=774b29d4f13844c495f206cafdad9c86++;;3pkr8wFaQ6Y2KDGBiYHwbf++Who Else?++single++Who Else?++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++213333++https://p.scdn.co/mp3-preview/e5af68257aa6f1743dbcde991089ae882d297d78?cid=774b29d4f13844c495f206cafdad9c86++;;2wiw002RmOsw18JoRyqNtZ++The Light++single++The Light++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++249600++https://p.scdn.co/mp3-preview/1d4d3e457213f833a55eaf20025fceb316dc378d?cid=774b29d4f13844c495f206cafdad9c86++;;50f9S5a7KiWwUvLJy04zEh++I Beg Your Pardon++single++ให้เธออภัย++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++219428++https://p.scdn.co/mp3-preview/c91b714157be06fcc1a798cfb22e17449da3e334?cid=774b29d4f13844c495f206cafdad9c86++///7uylAOouR2pzyM3yaUQpRp++I Beg Your Pardon++single++ขอโทษที่เป็นแบบนี้++2++5pokGZ1K9Hr6etaKPDxSG8+The Toys++198400++https://p.scdn.co/mp3-preview/4911b074cb84ae072258b3bb401c1e46fa454b34?cid=774b29d4f13844c495f206cafdad9c86++///2wgGM5bNyPTVI2d7KHmmRw++I Beg Your Pardon++single++จดหมาย++3++5pokGZ1K9Hr6etaKPDxSG8+The Toys++183724++https://p.scdn.co/mp3-preview/2f3d8f7d0334ff1f3a6747921f0b43b8b6e75eb5?cid=774b29d4f13844c495f206cafdad9c86++;;5mVeBv0bUZPJU7kPZcm594++หน้าหนาวที่แล้ว++single++หน้าหนาวที่แล้ว++1++5pokGZ1K9Hr6etaKPDxSG8+The Toys++272000++https://p.scdn.co/mp3-preview/e14e12bcafd6dcdbb172d8294a187a2ac7765104?cid=774b29d4f13844c495f206cafdad9c86++';
