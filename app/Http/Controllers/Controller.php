<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function sendSuccessReponse($data = [], int $statusCode = 200)
    {
        if (!$data) {
            $statusCode = 204;
        }
        return response()->json($data, $statusCode);
    }

    protected function sendErrorMessage($message = "", int $statusCode = 400, string $action = 'toast')
    {
        return response()->json([
            'message' => $message,
            'action' => $action
        ], $statusCode);
    }
}
