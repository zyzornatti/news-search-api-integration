<?php

if(isset ($_GET['query']) && $_GET['query'] != ''){
  $query_data = [
    'autoCorrect' => 'true',
    'pageNumber' => 1,
    'pageSize' => 10,
    'safeSearch' => 'false',
    // 'fromPublishedDate' => null,
    // 'toPublishedDate' => null,
    'q' => $_GET['query']
  ];

  $curl = curl_init();
  $url = "https://contextualwebsearch-websearch-v1.p.rapidapi.com/api/search/NewsSearchAPI";
  $request_url = $url. '?' . http_build_query($query_data);
  $rapidapi_key = getenv('RapidAPI_Key');

  curl_setopt_array($curl, [
  	CURLOPT_URL => $request_url,
  	CURLOPT_RETURNTRANSFER => true,
  	CURLOPT_FOLLOWLOCATION => true,
  	CURLOPT_ENCODING => "",
  	CURLOPT_MAXREDIRS => 10,
  	CURLOPT_TIMEOUT => 30,
  	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  	CURLOPT_CUSTOMREQUEST => "GET",
  	CURLOPT_HTTPHEADER => [
  		"X-RapidAPI-Host: contextualwebsearch-websearch-v1.p.rapidapi.com",
  		"X-RapidAPI-Key: {$rapidapi_key}"
  	],
  ]);

  // $response = curl_exec($curl);
  $response = json_decode(curl_exec($curl), true);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
  	echo "cURL Error #:" . $err;
  } else {
    // print_r($response['value']);
    // var_dump($response['value']);
    // die;
  	$news = $response['value'];
  }

}



 ?>
