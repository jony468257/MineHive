<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use stdClass;

class ApiController extends Controller
{
    /**
     * @param $error
     * @param  $errors
     * @param int $code
     * @return JsonResponse
     */
    public function sendValidationError($error, $errors = null, int $code = 500): JsonResponse
    {
        $response = new stdClass();
        $response->success = false;
        $response->message = $error;


        if ($errors instanceof MessageBag) {
            $errors = $errors->toArray();
        }

        $messages = array_map(static function ($messages) {
            return is_array($messages) ? $messages[0] : $messages;
        }, $errors);

        $response->errors = $messages;

        return response()->json($response, $code);
    }

    /**
     * @param $message
     * @param bool $true
     * @param string $type
     * @param int $code
     * @return JsonResponse
     */
    public function sendMessage($message, bool $true = true, string $type = 'success', int $code = 200): JsonResponse
    {
        $response = new stdClass();
        $response->success = $true;
        $response->type = $type;
        $response->message = $message;

        return response()->json($response, $code);
    }


    /**
     * @param $error
     * @param $message
     * @param int $code
     * @return JsonResponse
     */
    public function unauthorizedError($error, $message, int $code = 401): JsonResponse
    {
        $response = new stdClass();
        $response->success = false;
        $response->message = $message;

        return response()->json($response, $code);
    }

    /**
     * @param $data
     * @param $message
     * @return JsonResponse
     */
    public function sendResponse($data, $message): JsonResponse
    {
        $response = new stdClass();
        $response->success = true;
        $response->message = $message;
        $response->data = $data;

        return response()->json($response, 200);
    }
}
