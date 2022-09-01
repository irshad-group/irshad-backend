<?php

namespace App\Http\Controllers;

use App\Models\Ministries;
use Illuminate\Http\Request;
use App\Http\Resources\MinistriesResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Requests\MinistriesStoreRequest;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class MinistriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        // Get all data
        return MinistriesResource::collection(Ministries::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MinistriesStoreRequest $request)
    {
        $var = new Ministries;
        $var->title_en   = $request->title_en;
        $var->title_ar   = $request->title_ar;
        $var->title_kr   = $request->title_kr;
        $var->logo       = $request->logo;
        $var->krg        = $request->krg;
        $var->address    = $request->address;
        $var->gps_lat    = $request->gps_lat;
        $var->gps_lon    = $request->gps_lon;
        $var->website    = $request->website;
        $var->created_by = 1; // TODO replace [1] with [Auth::id()]
        $var->save();

        return response([
            'data' => new MinistriesResource($var),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return AnonymousResourceCollection
     */
        public function show($id)
    {
        // Fetch one record
        return MinistriesResource::collection(Ministries::where(['id' => $id])->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ministries  $ministries
     * @return \Illuminate\Http\Response
     */
    public function edit(Ministries $ministries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ministries  $ministries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ministries $ministries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ministries  $ministries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ministries $ministries)
    {
        //
    }
}
