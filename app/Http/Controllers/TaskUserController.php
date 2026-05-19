<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeTaskUserRequest;
use App\Models\TaskUser;
use Illuminate\Http\Request;

class TaskUserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
      $TaskUser=TaskUser::with('User','Task','Notification')->get();
       return $TaskUser ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeTaskUserRequest $request)
    {
      $TaskUser_date=$request->validated();
      return TaskUser::create( $TaskUser_date);
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
