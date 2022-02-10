<?php
namespace App\Services;

use GuzzleHttp\Client;
use App\REST\OrderApi;

class OrderService{

    public function getList(){
        $orderApi = new OrderApi();
        $result = $orderApi->orderList();
        return response()->json($result);
    }

    public function getDetail($id){
        $orderApi = new OrderApi();
        $result = $orderApi->orderDetail($id);
        return response()->json($result);
    }

    public function update($id){
        $orderApi = new OrderApi();
        $result = $orderApi->orderUpdate($id);
        return response()->json($result);
    }

}

?>
