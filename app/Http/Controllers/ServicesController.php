<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::orderBy('id', 'DESC')->get();
        return response()->json(["data"=>$services],200);
    }

    public function all($entity)
    {
        $services = Services::where("entity_id", $entity)->orderBy('id', 'DESC')->get();
        return response()->json(["data"=>$services],200);
    }

    public function watch($id){
        try{
            $service = Services::where('id','=',$id)->get();
            return response()->json(["data"=>$service],200);
        }catch (Exception $e) {
            return response()->json(["data"=>"none"],200);
        }
    }

    public function register(Request $request)
    {
        $services = new Services(request()->all());
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time()."-".$file->getClientOriginalName();
            $path = "all/{$request->entity_id}/services/".$filename;
            Storage::disk('local')->put("public/{$path}", file_get_contents($request->file));
            $services->file = $path;
         }
        // if ($request->hasFile('file')) {
        //     $temp = file_get_contents($request->file('file'));
        //     $services->file = base64_encode($temp);
        //     // $path = $request->file('file')->store('/public/documents');
        //     // $services->file = $path;
        //  }
        $services->save();
        return response()->json(["data"=>$services],200);
    }

    public function update(Request $request, $id){
        try{
            $service = Services::find($id);
            $service->update($request->all());
            return response()->json(["data"=>"ok"],200);
        }catch (Exception $e) {
            return response()->json(["data"=>"none"],200);
        }
    }

    public function delete($id){
        try{
            $docuemnts = Services::destroy($id);
            return response()->json(["data"=>"ok"],200);
        }catch (Exception $e) {
            return response()->json(["data"=>"none"],200);
        }
    }

}
