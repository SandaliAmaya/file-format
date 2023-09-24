<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Response as HttpResponse;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Response::macro('responseFormat', function ($status_code, $status, $message, $data, $http_code = HTTPResponse::HTTP_OK) {
            return Response::json([
                'status_code' => $status_code,
                'status' => $status,
                'message' => $message,
                'data' => $data,
            ], $http_code);
        });
    }
}
