<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Send response
     *
     * @param  mixed  $data
     * @param  integer $status
     * @return \Illuminate\Http\JsonResponse
     */
    protected function response($data, $status = 200)
    {
        return response()->json($data, $status);
    }
}
