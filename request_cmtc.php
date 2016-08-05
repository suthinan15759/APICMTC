<?php

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://it.cmtc.ac.th/json/courses.json');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $exec = curl_exec($curl);
    curl_close($curl);

	//print_r(json_decode($exec));

	$data = json_decode($exec);
	foreach ($data as $key => $value)
	{
		echo 'ทีมเหย้า: '.$value->id;
		echo '<br>';
		echo 'ทีมเยือน: '.$value->c_title;
		echo '<br>';
		echo 'รายละเอียด: '.$value->c_detail;
		echo '<br>';
		echo 'แข่งเวลา: '.$value->c_date;
		echo '<br>';
		echo 'จุคนในสนาม: '.$value->c_view;
		echo '<br>';
		echo '<a href="request_cmtc_detail.php?id='. $value->id .'">คลิ๊กเพื่อดูข้อมูล</a>';
		echo '<hr>';
	}

    //var_dump(json_decode($exec));
?>