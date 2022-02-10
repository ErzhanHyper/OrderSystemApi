<?php
namespace App\Services;

use GuzzleHttp\Client;
use App\REST\LogApi;

class LogService{

    public function getList(){
        $logApi = new LogApi();
        $result = $logApi->logList();
        return response()->json($result);
    }

}

?>
