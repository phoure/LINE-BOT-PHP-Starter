<?php
$access_token = 'kimeIkhXon3CjV2oBQDdvzI15V7Fe0eIt7gvjAVghuSyvAkhQYJ+fb/M4XQdLe/sQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aISKQnm12R2OjRnrIwKZTywvZtwfusYYzCcp0veGI/U7QdB04t89/1O/w1cDnyilFU=';
if($_GET['post'] == '1'){
	//$groupid[] = array('Cca7d5d4fa77312c96f6fc6cb452d649e','sleep');

//	$groupid[] = array('C5ca58854e5e7ae33964770acadc0211d','test');

	$groupid[] = array('C8900370d1a454dc66aec73dd6e338e2e','test');
	$groupid[] = array('C7299d5f55789ad1c3289b9349d7f7979','test');
	$groupid[] = array('C681668425a5bfe078431ddfdb5a05639','test');
	$groupid[] = array('C820d94f33e6390badda5b7d7f3bfe14e','test');
	$groupid[] = array('C7259a14167e54ec5b848c507fb98d73e','test');
	$groupid[] = array('C0f3eda007cb06163bce06bc0c7970890','test');
	$groupid[] = array('C7c21fdfdb672d564a42e329b86750313','test');
	$groupid[] = array('Cba1f9c02200bd7676979081a14026f92','test');
	$groupid[] = array('C7c21fdfdb672d564a42e329b86750313','test');
	$groupid[] = array('C12896fed940f59e1d5cc2d8e5792c011','test');
	$groupid[] = array('Cc556ed47c830e4d2ae08517a01110d98','test');
	$groupid[] = array('Cf7510422684df939758b8b332d6a1ab7','test');
	$groupid[] = array('C8c9761fb896d7cf8b1427454e5d52af9','test');
	$groupid[] = array('Ccd448170913d4ed8689385be94a90ddb','test');
	$groupid[] = array('C03bfbfda7f0be4a557f3896f72ffe581','test');
	$groupid[] = array('C97f4e0eaca4d229832ce07a611e796c8','test');
	$groupid[] = array('C2fdd63b2ad24c1dcb8facf7eedecb157','test');
	$groupid[] = array('C613643aa8d6765f39197fd29e600ea16','test');
	
	$groupid[] = array('C22f7e03e37cb4aaeeb778ec5178fd29e','test');
	$groupid[] = array('Cf0dcf148a517bec05c446091363aab0a','test');
	$groupid[] = array('C52ee816ee6606e68d0a640dda443bbfd','test');
	$groupid[] = array('Cc5615fd92701f43e176c76a76100f371','test');
	$groupid[] = array('Ceacdc59244dd589e9ad8bc85e836f94a','test');
	$groupid[] = array('Ce9ac0d2772b973feb06e3dbc4e55d3b8','test');
	$groupid[] = array('Cf077205d7ba2847c806ea2554ea681f2','test');
	$groupid[] = array('C0c1ccc85df9453c44aed540ae617831b','test');
	
	$groupid[] = array('Cac494974b4bb2242fd80e860475f921d','test');
	$groupid[] = array('Cf0e3801b863de2474bf3fe3097e9c56f','test');
	$groupid[] = array('C6327124c439411e48a2b9472efb2a08f','test');
	$groupid[] = array('Cd6013af8ba8845c9f1860a089aa6d982','test');
	$groupid[] = array('C618207712c9fd2e73a1dba9401bd3a3f','test');
	$groupid[] = array('C62dd18738d456ebbbafce8125c0009af','test');
	$groupid[] = array('Cf09150cf6ba835dd4bac48bbcd67ca28','test');
	
	$groupid[] = array('C5cf0cbe2c7619343658038ff36e532f2','test');
	$groupid[] = array('Cafb5167e081fcbe33f5cde8aa73945c6','test');
	$groupid[] = array('Ca5e28839c76aa2423932fa09148eb6a7','test');
	$groupid[] = array('C16bdebfa8b55a66e7f6e907564fc00f1','test');
	$groupid[] = array('C8112c2e7ce801948cae29310be8a4349','test');
	$groupid[] = array('C19019c7f1996ea1dd5677298c2ee29a9','test');
	$groupid[] = array('C0e3a62a4b5d40e899c74e9a33f1f5ae1','test');
	$groupid[] = array('C2e31f3646eb0058f12911933af5e6e85','test');
	$groupid[] = array('Cf25f2a2dbe87997507ccd92434e65246','test');
	$groupid[] = array('C3a1640f6575f4052ea08002b8c3cce7d','test');
	

	$groupid[] = array('C0f30acaa7ce585a786e0bfb4afc6ba94','ขายของออนไลน์');
	$groupid[] = array('Cddc9221a10312fc4d4e2bf0abebb537d','กลุ่มขายของ#2');
	$groupid[] = array('C2a59c1358911b2ca9e2648e967113ad6','ช้อปปิ้งออนไลน์0');
	$groupid[] = array('Ca50339a267e2c0d17c0254976452070e','woo');
	$groupid[] = array('C1d928e7a66b686c47096843cfa54aea5','hotvip4');
	$groupid[] = array('Cfb706767723304e5d44b91789bed6ac1','eiei');

	$groupid[] = array('C7637dca57b09b0b7a88243ce49895ac6','กลุ่ม sexphone 18+');
	
	for ($x = 0; $x <= count($groupid)-1; $x++) {
		
	if($_GET['banner'] == 'otop'){
		$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://i.imgur.com/dkDMRKb.jpg",
			"altText" => 'พลาดแล้วจะเสียใจ โปรโมชั่น แรงสุดๆ อีกครั้ง #พระมองตาม  #ซื้อ 1 แถม 1 เฉพาะในงาน OTOP Midyear 2018 ณ อิมแพ็คเมืองทองธานี',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						'type' => 'uri',
          					"linkUri" => "line://ti/p/%40mongtaam",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			]
			);
		}
		
		if($_GET['banner'] == 'ball'){
		$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://i.imgur.com/dkDMRKb.jpg",
			"altText" => '🎉 เสื้อฟุตบอลโลก 2018 เริ่มต้นเพียง 290.- สั่งจองได้แล้ววันนี้',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						'type' => 'uri',
          					"linkUri" => "line://ti/p/%40mongtaam",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			]
			);
		}
		
		
		
		else if($_GET['banner'] == 'fashion'){
		$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://image.ibb.co/fMNOso/0a41986c_4044_433b_9330_f201d0830414.jpg",
			"altText" => 'จำหน่ายเสื้อผ้าแฟชั่น ไม่มีค่าสมัคร ไม่ต้องสต็อกของเอง ก็อปรูปโพสต์+กำไรเพิ่มเองได้เลย จัดส่งในนาม สนใจแอดเข้ากลุ่มไลน์ได้เลยค่ะ',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						'type' => 'uri',
          					"linkUri" => "line://ti/g/wekpmbCaBO",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			]
			);
		}
		
		
	else if($_GET['banner'] == 'linegroup_1'){
			
			
	$imgs = array('https://i.imgur.com/H3MaAmr.jpg', 'https://i.imgur.com/IvcsIaM.jpg', 'https://i.imgur.com/HcqaHxL.jpg');
	$randimg =  $imgs[array_rand($imgs,1)];
			
		$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> $randimg,
			"altText" => '🎉 ขายดีแน่นอน! โพสโฆษณาลงกว่า 500+ กลุ่ม พิเศษ! ออกแบบภาพโฆษณาฟรี',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						'type' => 'uri',
          					"linkUri" => "line://ti/p/%40gkw1117o",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			],[
     'type' => 'template',
	"altText" => '🎉 ขายดีแน่นอน! โพสโฆษณาลงกว่า 500+ กลุ่ม พิเศษ! ออกแบบภาพโฆษณาฟรี',
						"template" => array(
						    'type' => 'buttons',
	'text' => '🎉 สินค้าขายดีแน่นอน! โพสโฆษณาลงกว่า 500+ กลุ่ม โฆษณาเต็มจอ เห็นชัดเจนกว่า เด่นกว่า พร้อมกดบนภาพให้แอดไลน์หรือลิงก์ได้อีกด้วย ราคาถูก คุ้มค่า เห็นผล ดีต่อธุรกิจ พิเศษวันนี้! *ออกแบบภาพโฆษณาฟรี',
						    'actions' =>  array([
						  'type' => 'uri',
						 'label' => 'สอบถามรายละเอียด',
						 'uri' => 'line://ti/p/%40gkw1117o'
						])
	  					  )
	]
			);
		}
		
		
		
		else if($_GET['banner'] == 'linegroup_2'){
			
		$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> 'https://i.imgur.com/N5bbiau.jpg',
			"altText" => '🎉 กำลังโพสต์ในกลุ่มคนเยอะๆ ที่มีแต่คนขายแต่ไม่มีคนซื้อ?',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						'type' => 'uri',
          					"linkUri" => "line://ti/p/%40gkw1117o",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			],[
     'type' => 'template',
	"altText" => '🎉 กำลังโพสต์ในกลุ่มคนเยอะๆ ที่มีแต่คนขายแต่ไม่มีคนซื้อ?',
						"template" => array(
						    'type' => 'buttons',
	'text' => '🎉 ลงทุนใหม่ให้ถูกจุด เห็นผลไว เพราะเราไม่เพียงทำโฆษณาบนกลุ่มผู้ขายเท่านั้น แต่เราเข้ายังถึงกลุ่มผู้ใช้งานทั่วไป กลุ่มคอมมิวนิตี้ต่างๆ ที่มีผู้ใช้งานจริง โฆษณาไม่แน่นจนเกินไป จึงทำให้เข้าถึงกลุ่มเป้าหมายได้ดีกว่า',
						    'actions' =>  array([
						  'type' => 'uri',
						 'label' => 'สอบถามรายละเอียด',
						 'uri' => 'line://ti/p/%40gkw1117o'
						])
	  					  )
	]
			);
		}
		
		
		
		
else if($_GET['banner'] == 'make'){	
		
		$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://i.imgur.com/MA1Fmka.jpg",
			"altText" => '🎉 ลดถึง 50%❗️ ทุกบริการ ออกแบบภาพโฆษณา แต่ง-ถ่ายภาพสินค้า สำหรับธุรกิจและร้านค้าของคุณ งานคุณภาพสูง ราคาโดน ลูกค้าซื้อแน่นอน!',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						'type' => 'message',
          					"label" => "ดูตัวอย่างผลงาน ออกแบบภาพโฆษณา",
          					"text" => "ดูตัวอย่างผลงาน ออกแบบภาพโฆษณา",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 520,
						    'width' => 520
						    )
						],[
						'type' => 'message',
          					"label" => "ดูตัวอย่างผลงาน ไดคัตและแต่งภาพสินค้า",
          					"text" => "ดูตัวอย่างผลงาน ไดคัตและแต่งภาพสินค้า",
						 "area" => array(
						    'x' => 520,
						    'y' => 0,
						    'height' => 520,
						    'width' => 520
						    )
						],[
						'type' => 'message',
          					"label" => "ดูตัวอย่างผลงาน ถ่ายภาพสินค้า",
          					"text" => "ดูตัวอย่างผลงาน ถ่ายภาพสินค้า",
						 "area" => array(
						    'x' => 0,
						    'y' => 520,
						    'height' => 520,
						    'width' => 520
						    )
						],[
						'type' => 'uri',
          					"linkUri" => "line://ti/p/%40giy8621v",
						 "area" => array(
						    'x' => 520,
						    'y' => 520,
						    'height' => 520,
						    'width' => 520
						    )
						])
			],[
     'type' => 'template',
	"altText" => '🎉 ลดถึง 50%❗️ ทุกบริการ ออกแบบภาพโฆษณา แต่ง-ถ่ายภาพสินค้า สำหรับธุรกิจและร้านค้าของคุณ งานคุณภาพสูง ราคาโดน ลูกค้าซื้อแน่นอน!',
						"template" => array(
						    'type' => 'buttons',
	'text' => '🎉 งานออกแบบโฆษณาคุณภาพ ราคาโดน วันนี้ลดราคาพิเศษ! สำหรับธุรกิจและร้านค้าออนไลน์ถึง 50% งานราคาหลักร้อยคุณภาพหลักพัน สวยจนลูกค้าต้องซื้อแน่นอน! ลองกดดูตัวอย่างงานที่ต้องการได้ด้านบนเลยนะครับ',
						    'actions' =>  array([
						  'type' => 'uri',
						 'label' => 'สอบถามรายละเอียด',
						 'uri' => 'line://ti/p/%40giy8621v'
						])
	  					  )
	]
			);
		
}
		
else if($_GET['banner'] == 'game'){
	$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://image.ibb.co/i1VFYT/line_game.jpg",
			"altText" => '🎉 ครั้งแรก! เกมล่ารางวัลไลฟ์บนไลน์ เล่นง่าย แจกแหลก ของรางวัลเพียบ!',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						'type' => 'uri',
          					"linkUri" => "line://ti/g/NMyNkUwmaM",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			],[
     'type' => 'template',
	"altText" => '🎉 ครั้งแรก! เกมล่ารางวัลไลฟ์บนไลน์ เล่นง่าย แจกแหลก ของรางวัลเพียบ!',
						"template" => array(
						    'type' => 'buttons',
	'text' => '🎉 ใช้โค้ด ABC12345 เพื่อรับเงินรางวัลเลยตอนนี้!',
						    'actions' =>  array([
						  'type' => 'uri',
						 'label' => 'ร่วมสนุกตอนนี้',
						 'uri' => 'line://ti/g/NMyNkUwmaM'
						])
	  					  )
	]
			);
		}
		
		
		
	/*
		$card = array([
			'type' => 'text',
			'text' => 'แสดงตัวอย่างการโพสต์ภาพแบบเต็มจอแบบ Rich Message โดยไม่ต้องลงทุน'
		      ],
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://i.imgur.com/pHeEc3g.jpg",
			"altText" => 'มาแบ่งปันกลุ่มกัน!',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						 'type' => 'uri',
          					"linkUri" => "line://ti/p/%40gkw1117o",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			]
			);
*/
/*

$id[] = 'เทคนิคและวิธีโพสต์สินค้าในไลน์ให้ขายดี 2018'; $title[]= 'สอนโปรโมท โพสต์โฆษณาอย่างไรให้เด่น สะดุดตา แบบมืออาชีพ';  $thumb[] = 'https://www.img.in.th/images/3d4ed988b8d35b0517a01b7a8152db17.jpg';
	$id[] = 'โพสต์โฆษณาให้เด่นและปังกว่าใคร'; $title[]= 'โพสโฆษณาด้วยรูปแบบต่างๆ ที่ใครเห็นก็ต้องกดดู'; $thumb[] = 'https://www.img.in.th/images/f2de649746267a9556855833d96f357a.jpg';
	$id[] = 'ส่ง Rich Message ได้ฟรีๆ'; $title[]= 'ส่งข้อความภาพแบบเต็มจอโดยไม่ต้องเสียเงินสักบาท'; $thumb[] = 'https://www.img.in.th/images/3305912fa6e44c8246dcc9f5e0c0beee.jpg';
	$id[] = 'สอนดึงไลน์ LINE@ เข้ากลุ่ม'; $title[]= 'วันนี้คุณสามารถนำแอคเคาท์ LINE@ เข้าร่วมกลุ่มได้แล้ว';  $thumb[] = 'https://www.img.in.th/images/41dcccb59e66641db783b7b492166823.jpg';
	$id[] = 'โพสต์สินค้าหลายกลุ่มพร้อมกัน'; $title[]= 'กระจายโฆษณาของคุณไปยังกลุ่มนับพันได้ฟรี โดยที่คุณไม่ต้องเข้ากลุ่ม'; $thumb[] = 'https://www.img.in.th/images/cddf08fd9d6032bd9b8aeb28e8c572c1.jpg';
	$id[] = 'ทำให้ไลน์รู้จักลูกค้าของคุณ'; $title[]= 'สร้างความประทับใจ ให้ LINE@ ของคุณสามารถเรียกชื่อลูกค้าของคุณได้'; $thumb[] = 'https://www.img.in.th/images/594186f26141568d5bb51f5bbec1dbb5.jpg';
	$id[] = 'ส่งแบบฟอร์มให้ลูกค้าได้ง่ายๆ'; $title[]= 'สร้างความน่าเชื่อถือที่มากกว่าคนอื่น ด้วยแบบฟอร์มในไลน์'; $thumb[] = 'https://www.img.in.th/images/a0bd6d6ed1c6036a68265b53f0835921.jpg';
	$id[] = 'ควบคุมได้ทุกอย่างในแอปไลน์'; $title[]= 'เพิ่มความสะดวกสบาย และน่าอัศจรรย์ด้วยการส่งลูกค้าไปทุกที่ที่ต้องการ'; $thumb[] = 'https://www.img.in.th/images/1a4ca077e8c6f9c1421072958a4306df.jpg';
	$id[] = 'ตอบกลับได้มากกว่า 5 ข้อความ'; $title[]= 'จะกี่ข้อความก็ส่งได้ไม่มีปัญหา ทิ้งข้อจำกัดทั้งข้อความต้อนรับและตอบกลับอัตโนมัติ'; $thumb[] = 'https://www.img.in.th/images/af83d26d25a1131f06404fdb56ce4472.jpg';
	$id[] = 'เทคนิคอื่นๆ อีกมากมาย'; $title[]= 'เทคนิคที่ไม่เคยมีใครสอนมาก่อน สอนฟรีเพียง 1 กลุ่ม เต็มปิดลิงก์ทันที รีบเข้า!'; $thumb[] = 'https://www.img.in.th/images/b9e2d3455c31d2e0a10c662eae1106e5.jpg';
	
	$card = array([
		'type' => 'template',
	    "altText" => 'สอนโปรโมท โพสต์โฆษณาในไลน์อย่างไรให้เด่น สะดุดตา วิธีใหม่ปี 2018',
		"template" => array(
						'type' => 'carousel',
						'columns' => array([
								'thumbnailImageUrl' => $thumb[0],
								'imageBackgroundColor' => '#000000',
								'title' => $id[0],
								'text' => $title[0],
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ เข้าร่วมคอร์สนี้',
									'uri' => 'line://ti/p/%40gkw1117o'
															])
								],[
								'thumbnailImageUrl' => $thumb[1],
								'imageBackgroundColor' => '#000000',
								'title' => $id[1],
								'text' => $title[1],
								'actions' =>  array([
									'type' => 'message',
									'label' => '▶️ ลองความสามารถนี้',
									'text' => 'ดึง LINE@ เข้ากลุ่ม'
															])
								],[
								'thumbnailImageUrl' => $thumb[2],
								'imageBackgroundColor' => '#000000',
								'title' => $id[2],
								'text' => $title[2],
								'actions' =>  array([
									'type' => 'message',
									'label' => '▶️ ลองความสามารถนี้',
									'text' => 'กระจายโฆษณา'
															])
								],[
								'thumbnailImageUrl' => $thumb[3],
								'imageBackgroundColor' => '#000000',
								'title' => $id[3],
								'text' => $title[3],
								'actions' =>  array([
									'type' => 'message',
									'label' => '▶️ ลองความสามารถนี้',
									'text' => 'โพสต์สินค้าให้เด่น'
															])
								],[
								'thumbnailImageUrl' => $thumb[4],
								'imageBackgroundColor' => '#000000',
								'title' => $id[4],
								'text' => $title[4],
								'actions' =>  array([
									'type' => 'message',
									'label' => '▶️ ลองความสามารถนี้',
									'text' => 'โพสต์ Rich Message'
															])
								],[
								'thumbnailImageUrl' => $thumb[5],
								'imageBackgroundColor' => '#000000',
								'title' => $id[5],
								'text' => $title[5],
								'actions' =>  array([
									'type' => 'message',
									'label' => '▶️ ลองความสามารถนี้',
									'text' => 'ไลน์รู้จักฉัน?'
															])
								],[
								'thumbnailImageUrl' => $thumb[6],
								'imageBackgroundColor' => '#000000',
								'title' => $id[6],
								'text' => $title[6],
								'actions' =>  array([
									'type' => 'message',
									'label' => '▶️ ลองความสามารถนี้',
									'text' => 'การส่งแบบฟอร์ม'
															])
								],[
								'thumbnailImageUrl' => $thumb[7],
								'imageBackgroundColor' => '#000000',
								'title' => $id[7],
								'text' => $title[7],
								'actions' =>  array([
									'type' => 'message',
									'label' => '▶️ ลองความสามารถนี้',
									'text' => 'การกำหนดเส้นทาง'
															])
								],[
								'thumbnailImageUrl' => $thumb[8],
								'imageBackgroundColor' => '#000000',
								'title' => $id[8],
								'text' => $title[8],
								'actions' =>  array([
									'type' => 'message',
									'label' => '▶️ ลองความสามารถนี้',
									'text' => 'ข้อความไม่จำกัด'
															])
								],[
								'thumbnailImageUrl' => $thumb[9],
								'imageBackgroundColor' => '#000000',
								'title' => $id[9],
								'text' => $title[9],
								'defaultAction' =>  array(
									'type' => 'uri',
									'label' => '➡ เข้าร่วมคอร์สนี้',
									'uri' => 'line://ti/p/%40gkw1117o'
									),
								'actions' =>  array([
									'type' => 'uri',
									'label' => '➡ เข้าร่วมคอร์สนี้',
									'uri' => 'line://ti/p/%40gkw1117o'
															])
								]),
											'imageAspectRatio' => 'rectangle',
											'imageSize' => 'cover'
						)
		]);
	*/	
	/*
		$card = array(
			     [
			     'type' => 'template',
				"altText" => 'มาแบ่งปันกลุ่มกัน!',
				"template" => array(
				    'type' => 'buttons',
				    'text' => 'ขณะนี้ระบบกำลังจัดเก็บกลุ่มใหม่เพิ่มจากเพื่อนๆ ที่เข้ามาร่วมกันแนะนำ หากคุณมีกลุ่มที่อยากแนะนำให้เพื่อนๆ อยากเข้า มาแชร์ลิงก์ของกลุ่มไว้ที่นี่เพื่อให้เพื่อนๆ ได้ค้นหาต่อ',
				    'actions' =>  array(['type' => 'uri',
					 'label' => 'แบ่งปันกลุ่มต่อให้เพื่อน',
					 'uri' => 'https://line.me/R/ti/p/%40gkw1117o'
					],['type' => 'message',
					 'label' => 'แบ่งปันอย่างไร?',
					 'text' => 'แบ่งปันอย่างไร?'
					])
				    )
				]
				);
	
		$data = array('to' => $groupid[$x][0], 'messages' => $card);
		
		$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://i.imgur.com/W23qHMJ.jpg",
			"altText" => 'สอนฟรี! ส่ง Rich Message ภาพเต็มจอได้ในกลุ่ม ตามมาเลย',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						 'type' => 'uri',
          					"linkUri" => "line://ti/p/%40gkw1117o",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			]
			);
		
		
		$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://i.imgur.com/afNC69v.jpg",
			"altText" => 'รับแลกกลุ่ม ด่วน❗️',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						 'type' => 'uri',
          					"linkUri" => "line://ti/p/%40gkw1117o",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			]
			);

		
	*/

	/*
	$card = array(
		     [
		     'type' => 'imagemap',
  			"baseUrl"=> "https://www.picz.in.th/images/2018/05/31/zagyW2.jpg",
			"altText" => '🎉 กลุ่มธุรกิจโพสต์ขายสินค้าได้ฟรี! เพียงกลุ่มละ 1 บาท สำหรับต่อยอดธุรกิจทุกรูปแบบ คนเยอะทุกกลุ่ม รับประกันได้เข้าจริงทุกลิงก์!',
			"baseSize" => array(
			    'height' => 1040,
			    'width' => 1040
			    ),
			  'actions' =>  array([
						'type' => 'uri',
          					"linkUri" => "line://ti/p/%40gkw1117o",
						 "area" => array(
						    'x' => 0,
						    'y' => 0,
						    'height' => 1040,
						    'width' => 1040
						    )
						])
			],[
     'type' => 'template',
	"altText" => '🎉 กลุ่มธุรกิจโพสต์ขายสินค้าได้ฟรี! เพียงกลุ่มละ 1 บาท สำหรับต่อยอดธุรกิจทุกรูปแบบ คนเยอะทุกกลุ่ม รับประกันได้เข้าจริงทุกลิงก์!',
						"template" => array(
						    'type' => 'buttons',
	'text' => '🎉 โอกาสมาถึงแล้ว! หากคุณกำลังมองหากลุ่มธุรกิจเพื่อเข้าถึงกลุ่มเป้าหมาย พิเศษ! เพียงกลุ่มละ 1 บาท สำหรับต่อยอดธุรกิจทุกรูปแบบ คนเยอะ โพสต์ขายสินค้าได้ฟรี รับประกันเข้าได้จริงทุกกลุ่ม!',
						    'actions' =>  array([
						  'type' => 'uri',
						 'label' => 'สอบถามรายละเอียด',
						 'uri' => 'line://ti/p/%40gkw1117o'
						])
	  					  )
	]
			);
		
		*/
		
	
		
		
		
		
		$data = array('to' => $groupid[$x][0], 'messages' => $card);
				// Make a POST Request to Messaging API to reply to sender
				$url = 'https://api.line.me/v2/bot/message/push';
				$post = json_encode($data);
				$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				$result = curl_exec($ch);
				curl_close($ch);
				echo $result . "\r\n";
	} 
}
