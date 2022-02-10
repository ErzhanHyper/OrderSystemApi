<?php

public function connect(){

    $client = 'http://127.0.0.1:8001/api/login';
    $curl = curl_init();
    curl_setopt($curl ,CURLOPT_URL, $client);
    curl_setopt($curl,CURLOPT_POST, 1);
    curl_setopt($curl,CURLOPT_POSTFIELDS, 'username='.config('app.order_client_id').'&password='.config('app.order_client_secret'));
    curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl,CURLOPT_CONNECTTIMEOUT ,3);
    curl_setopt($curl,CURLOPT_TIMEOUT, 20);
    $response = curl_exec($curl);
    $token = json_decode($response, true);
    curl_close ($curl);

    return $token;
}

public function orderList(){
    $access = $this->connect();
    $url = 'http://127.0.0.1:8001/api/orders/list';
    if($access){
        $curl = curl_init();
        $arr = json_encode([]);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , "Authorization: Bearer ".$access['token'] ));
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $arr);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,3);
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        $response = curl_exec($curl);
        curl_close ($curl);
        $result = [
            'success' => true,
            'data' => $response
        ];
    }else{
        $result = [
            'success' => false,
            'data' => []
        ];
    }

    return $result;
}

?>
