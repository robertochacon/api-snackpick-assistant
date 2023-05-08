<?php

namespace App\Http\Controllers;

use App\Entities;
use Illuminate\Http\Request;

class EntitiesController extends Controller
{
    public function index()
    {
        $Entities = Entities::orderBy('id', 'DESC')->get();
        return response()->json(["data"=>$Entities],200);
    }

    public function watch($id){
        try{
            $entity = Entities::find($id);
            return response()->json(["data"=>entity],200);
        }catch (Exception $e) {
            return response()->json(["data"=>"none"],200);
        }
    }

    public function register(Request $request)
    {
        $Entities = new Entities(request()->all());
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('/public/entities');
            $Entities->logo = $path;
         }
        $Entities->save();
        return response()->json(["data"=>$Entities],200);
    }

    public function update(Request $request, $id){
        try{
            $orders = Entities::find($id);
            $orders->update($request->all());
            return response()->json(["data"=>"ok"],200);
        }catch (Exception $e) {
            return response()->json(["data"=>"none"],200);
        }
    }

    public function delete($id){
        try{
            $docuemnts = Entities::destroy($id);
            return response()->json(["data"=>"ok"],200);
        }catch (Exception $e) {
            return response()->json(["data"=>"none"],200);
        }
    }

}
