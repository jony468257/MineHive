<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var string[]
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var string[]
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (AuthenticationException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json(['result' => 0, 'message' => 'Unauthorised Request'], 401);
            }
        });

        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Exception|Throwable $exception)
    {
        if ($exception instanceof AuthenticationException) {
            return response()->json([
                'message' => 'Resource not found',
            ], 404);
        }
    }
}
