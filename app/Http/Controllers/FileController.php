<?php

namespace App\Http\Controllers;

use App\Core\Utils;
use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\FileService;
use Illuminate\Support\Facades\Validator;

class FileController extends TatucoController
{
    protected $validateStore = [
        //'file' => 'required',
     /*   'name' => 'required|string|min:5',
        'directory' => 'required|string|min:10',
        'type_id' => 'required|integer|min:1',*/
       // 'detention_id' => 'required|string|min:1'
    ];

    public function __construct()
    {
        parent::__construct(new FileService());
    }

    public function store(Request $request)
    {
        $files = $request->file;
        $result = [];
       /* $archivo = base64_decode($request->base64textString);
        $name =  time().'_'.$request->nombreArchivo;
        $directory = storage_path().'\\app\\detentions\\'.$name;
        $obj = [
            'name' => $name,
            'directory' => $directory ,
            'route' => "\\detentions\\",
            'file' => $archivo
        ];*/
        //  return response()->json(["count" => $countfiles, "FILE"=> $_FILES]);
        foreach ($files as $file) {
           // return response()->json(["tipo" => "data:".$file["tipo"].";base64,"]);
            $base_clean = str_replace("data:".$file["tipo"].";base64,", "", $file["base64textString"]);

            $_file = base64_decode($base_clean);
            $name =  time().'_'.$file["nombreArchivo"];
            $directory = storage_path().'\\app\\detentions\\'.$name;
            $dir_amazon = "http://s3.us-west-2.amazonaws.com/yoplanifico/detenciones/";
            $obj = [
                'name' => $name,
                'directory' => $directory ,
                'file' => $_file,
                'detention_id' => $request->detention_id,
                'aws' => $dir_amazon,
                "type_id" => $file["type_id"]
            ];

            array_push($result, $obj);
        }
        //return response()->json(["laurita-tierni"=> $result, "cantidad_archivos" => $countfiles]);
       /* $uploadedFile = $request->file('files');
        $filename = time().'_'.$uploadedFile->getClientOriginalName();
        $directory = storage_path().'\\app\\detentions\\'.$request->detention_id.'\\'.$filename;
        $request->merge([
            'name' => $filename,
            'directory' => $directory,
            'route' => "\\detentions\\"
        ]);*/
      // return response()->json(["res" => Utils::convert_from_latin1_to_utf8_recursively($result)]);
       $request->merge(["archivos" => $result ]);
        $validator = Validator::make($request->all(), array_merge($this->validateStore, $this->validateDefault));
        if ($validator->fails()) {
            return response()->json([
                $validator->getMessageBag(),
            ], 422);
        }

        return parent::store($request);
    }


    public function download(Request $request) {
        return $this->service->download($request);
    }
}
