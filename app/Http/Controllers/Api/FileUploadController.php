<?php

namespace App\Http\Controllers\Api;

use Dingo\Api\Http\Request;
use Storage;
use Excel;

class FileUploadController extends BaseController
{

    public function dataImport(Request $request)
    {
        $file = $request->file('txt_file');
        $ext = $file->getClientOriginalExtension();

        list($usec, $sec) = explode(" ", microtime());
        $name = $sec.str_replace('0.', '_',$usec);
        $file->move('storage/upload/import', $name.'.'.$ext);

        $file_name =  'storage/upload/import/'.$name.'.'.$ext;
        // return $file_name;
        $res = Excel::load($file_name, function($reader) {
            return  $reader->get();
        });
        return $this->success($res);
    }

}
