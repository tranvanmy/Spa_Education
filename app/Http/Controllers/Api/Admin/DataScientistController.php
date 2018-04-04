<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\DataScientist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataScientistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->response(DataScientist::all());
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

        if (DataScientist::create($data)) {
            return $this->response(['message' => trans('message.add_success')]);
        }

        return $this->response(['message' => trans('message.add_failed')], 401);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataScientist  $dataScientist
     * @return \Illuminate\Http\Response
     */
    public function show(DataScientist $dataScientist)
    {
        return $this->response($dataScientist);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataScientist  $dataScientist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataScientist $dataScientist)
    {
        $data = $request->all();
        $data['slug_vi'] = str_slug($request->slug_vi);
        $data['slug_en'] = str_slug($request->slug_en);

        if ($dataScientist->fill($data)->save()) {
            return $this->response(['message' => trans('message.edit_success')]);
        }

        return $this->response(['message' => trans('message.edit_success')], 401);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataScientist  $dataScientist
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataScientist $dataScientist)
    {
        if ($dataScientist->delete()) {
            return $this->response(['message' => trans('message.delete_success')]);
        }

        return $this->response(['message' => trans('message.delete_failed')], 401);
    }
}
