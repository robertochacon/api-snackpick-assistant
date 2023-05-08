<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use App\Events\UpdateOrder;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Orders::orderBy('id', 'ASC')->get();
        return response()->json(["data"=>$orders],200);
    }

    public function watch($id){
        try{
            $entity = Orders::find($id);
            return response()->json(["data"=>entity],200);
        }catch (Exception $e) {
            return response()->json(["data"=>"none"],200);
        }
    }

    public function register(Request $request)
    {
        $orders = new Orders(request()->all());
        $orders->save();
        $msg = 'register_order';
        event(new UpdateOrder($msg));
        return response()->json(["data"=>$orders],200);
    }

    public function update(Request $request, $id){
        try{
            $order = Orders::find($id);
            if($request->status == 'call_order'){
                $msg = ['action'=>'call_order','order'=>$order->code.$order->id];
            }else{
                $order->update($request->all());
                $msg = ['action'=>'update_order'];
            }
            event(new UpdateOrder($msg));
            return response()->json(["data"=>"ok"],200);
        }catch (Exception $e) {
            return response()->json(["data"=>"none"],200);
        }
    }

    public function delete($id){
        try{
            $order = Orders::destroy($id);
            $msg = 'delete_order';
            event(new UpdateOrder($msg));
            return response()->json(["data"=>"ok"],200);
        }catch (Exception $e) {
            return response()->json(["data"=>"none"],200);
        }
    }
}
