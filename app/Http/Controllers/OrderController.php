<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;

class OrderController extends Controller
{

    public function list(OrderService $service){
        return $service->getList();
    }

    public function show(OrderService $service, $id){
        return $service->getDetail($id);
    }

    public function update(OrderService $service, $id){
        return $service->update($id);
    }

}
