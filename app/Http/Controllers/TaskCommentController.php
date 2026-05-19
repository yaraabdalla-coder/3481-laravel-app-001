<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentsRequest;
use App\Models\TaskComment;
use Illuminate\Http\Request;

class TaskCommentController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

      $TaskComment=TaskComment::with('User','Task')->get();
       return $TaskComment;
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentsRequest$request)
    {
     $Comment_date=$request->validated();
     return TaskComment::create( $Comment_date);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
