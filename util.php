<?php
/**
 * 指定URLにPOSTでリクエストを送る
 *
 * @param string $url
 * @param array  $query
 * @return string
 */
function sendPostRequest($url, $query=[]){
	return(sendRequest([
			CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
			CURLOPT_URL => $url,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => json_encode($query)
	]));
}

/**
 * cURLでリクエストを送信する
 *
 * @param array $option
 * @return string
 */
function sendRequest($option){
	$ch = curl_init();
	curl_setopt_array($ch, $option);
	$response = curl_exec($ch);
	curl_close($ch);

	return($response);
}

/**
 * JSON文字列を整形する
 *
 * @param string $str
 * @return string
 */
function prettyJsonString($str){
	$json = json_decode($str);
	return(
		json_encode($json, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT)
	);
}