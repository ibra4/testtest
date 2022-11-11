<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class AdminMediaController extends Controller
{
    public function adminsUpload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $name = 'avatar';
        } else if ($request->hasFile('cv')) {
            $name = 'cv';
        } else {
            throw new BadRequestHttpException("File not allowed");
        }
        
        $file = $request->file($name);

        //get extension
        $extension = $file->getClientOriginalExtension();

        //file to store
        $fileName = $name . '_' . time() . '.' . $extension;

        //upload to store
        $path = $file->move("admins/$name", $fileName);

        return response()->json([
            'path' => "/$path",
            'name' => $fileName
        ]);
    }
}
