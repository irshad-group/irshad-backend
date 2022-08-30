<?php

namespace App\Http\Controllers;

use App\Models\Ministries;
use Illuminate\Http\Request;
use App\Http\Resources\MinistriesResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ministries  $ministries
     * @return \Illuminate\Http\Response
     */
    public function show(Ministries $ministries)
    {
        //
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
