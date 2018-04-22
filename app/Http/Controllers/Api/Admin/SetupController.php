<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Setup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return $this->response($this->getSetup());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $setup = $this->getSetup();

        if ($setup->fill($request->all())->save()) {
            return $this->response([
                'message' => trans('message.edit_success'),
                'data' => $setup->fresh(),
            ]);
        }

        return $this->response(['message' => trans('message.edit_success')], 401);
    }

    private function getSetup()
    {
        return Setup::first() ?: new Setup();
    }
}
