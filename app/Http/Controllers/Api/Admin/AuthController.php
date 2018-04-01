<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Tymon\JWTAuth\JWTAuth;

class AuthController extends ApiController
{
    protected $jwtAuth;

    public function  __construct(JWTAuth $jwtAuth)
    {
        $this->jwtAuth = $jwtAuth;
    }

    public function login(Request $request)
    {
        if ($validator = $this->notValidateLogin($request)) {
            return $this->response($validator, 400);
        }

        $credentials = $request->only('email', 'password');
        if (!$token = $this->jwtAuth->attempt($credentials)) {
            return $this->response(['errors' => ['message' => trans('auth.failed')]], 400);
        }

        return $this->response([
            'user' => $this->jwtAuth->authenticate($token),
            'token' => [
                'token_type' => 'Bearer',
                'access_token' => $token,
            ],
        ]);
    }

    public function logout(Request $request)
    {
        if ($token = $this->jwtAuth->getToken()) {
            $this->jwtAuth->invalidate($token);

            return $this->response(['message' => trans('auth.logout.success')], 200);
        }

        return $this->response(['errors' => ['message' => trans('auth.logout.warning')]], 400);
    }

    protected function attemptLogin(Request $request)
    {
        return \Auth::guard('web')
            ->attempt($request->only('email', 'password'), true);
    }

    protected function notValidateLogin(Request $request)
    {
        $validator = \Validator::make($request->all(), $rule = [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!$validator->fails()) {
            return false;
        }

        foreach ($rule as $key => $value) {
            if ($error = $validator->messages()->first($key)) {
                $response['errors'][$key] = $error;
            }
        }

        return $response;
    }
}
