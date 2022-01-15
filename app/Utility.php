<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Utility extends Model
{
    public static function file_upload($request, $file_name, $upload_dir)
    {
        if ($request->hasFile($file_name)) {
            $file = $request->$file_name;
            $filename = time() . '_' . $file->getClientOriginalName();
            $up_path = "images/".date('Y-m')."/$upload_dir/";
            $path = $file->move($up_path, $filename);
            Storage::disk('local')->put('public/images'.'/'.$filename, $file_name, 'public');
            if ($file->getError()) {
                $request->session()->flash('warning', $file->getErrorMessage());

                return false;
            }

            return $path;
        }
    }
}
