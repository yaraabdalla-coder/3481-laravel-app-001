<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskNotificationsRequest;
use App\Models\TaskNotifications;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TaskNotificationsController extends Controller
{
    public function index()
    {
        $TaskNotifications = TaskNotifications::with('message')->get();
        return $TaskNotifications;
    }

    public function store(StoreTaskNotificationsRequest $request)
    {
        $TaskNotifications_data = $request->validated();
        return TaskNotifications::create($TaskNotifications_data);
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
