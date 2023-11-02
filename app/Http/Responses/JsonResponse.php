<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse as BaseJsonResponse;

class JsonResponse
{
    public static function success($data, $status = 200)
    {
        return response()->json(['data' => $data], $status);
    }

    public static function error($message, $status = 400)
    {
        return response()->json(['error' => $message], $status);
    }
}