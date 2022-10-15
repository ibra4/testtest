<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMediaController extends Controller
{
    public function adminsUpload(Request $request)
    {
        $file = $request->file('image');

        //get extension
        $extension = $file->getClientOriginalExtension();

        //file to store
        $fileNameToStore = "admdin" . '_' . time() . '.' . $extension;

        //upload to store
        $path = $file->move('admins', $fileNameToStore);

        return response()->json([
            'path' => "/$path"
        ]);
    }
}
