<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\JoinUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JoinUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->response(JoinUs::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug_vi'] = str_slug($request->slug_vi);
        $data['slug_en'] = str_slug($request->slug_en);

        if (JoinUs::create($data)) {
            return $this->response(['message' => trans('message.add_success')]);
        }

        return $this->response(['message' => trans('message.add_failed')], 401);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JoinUs  $joinUs
     * @return \Illuminate\Http\Response
     */
    public function show(JoinUs $joinUs)
    {
        return $this->response($joinUs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JoinUs  $joinUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JoinUs $joinUs)
    {
        $data = $request->all();
        $data['slug_vi'] = str_slug($request->slug_vi);
        $data['slug_en'] = str_slug($request->slug_en);

        if ($joinUs->fill($data)->save()) {
            return $this->response(['message' => trans('message.edit_success')]);
        }

        return $this->response(['message' => trans('message.edit_success')], 401);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JoinUs  $joinUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(JoinUs $joinUs)
    {
        if ($joinUs->delete()) {
            return $this->response(['message' => trans('message.delete_success')]);
        }

        return $this->response(['message' => trans('message.delete_failed')], 401);
    }
}
