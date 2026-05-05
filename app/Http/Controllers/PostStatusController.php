<?php

namespace App\Http\Controllers;

use App\Models\Poststatuses;
use App\Http\Requests\StorePoststatusesRequest;
use App\Http\Requests\UpdatePoststatusesRequest;
use Illuminate\Routing\Controller;

class  PostStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Poststatuses $post_statuses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poststatuses $post_statuses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, Poststatuses $poststatuses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poststatuses $poststatuses)
    {
        //
    }
}
