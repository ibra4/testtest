<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TinyCMEController extends Controller
{
    public function actionUpload(Request $request)
    {
        $file = $request->file('file');

        $extension = $file->getClientOriginalExtension();

        $fileName = 'tinycme_' . time() . '.' . $extension;

        $path = $file->move("tinycme/", $fileName);

        return $this->sendSuccessReponse([
            'path' => asset($path),
            'name' => $fileName
        ]);
    }
}
