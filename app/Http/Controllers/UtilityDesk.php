<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

class UtilityDesk extends Controller
{
    public function saveFile($folder,$keepFileName)
    {
        return 555;
        /*if ($keepFileName == 1)
        {
            $file = request()->file('myfile');
            $filename = $file->getClientOriginalName();
            request()->file('myfile')->storeAs('public/'.$folder,$filename);
            $urlPart = Storage::url('public/'.$folder.'/'.$filename);
            return asset($urlPart);
        }*/
    }
}