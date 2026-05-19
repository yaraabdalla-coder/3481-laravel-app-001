<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InitController;
use App\Http\Controllers\SystemController;
USE App\Http\Controllers\TaskController;
use App\Http\Controllers\{
    AuthController,
    CommentsController,
    PostController,
    PostStatusController,
    ReactionController,
    ReactionTypeController,
    ReplyController,
    UserController,
    TaskCommentController,
TaskNotificationsController,
    TaskUserController,
};
    

 use App\Models\TaskNotifications;
Route::prefix('auth')->controller(AuthController::class)->group(function () {

    Route::post('login', 'login')->name('login');
    Route::post('register', 'register');
    Route::post('forget-password', 'forget_password');
    Route::post('reset-password', 'reset_password');
    Route::post('change-password', 'change_password');
    Route::post('active-sessions', 'active_sessions');
    Route::post('logout-all', 'logout_all');
    Route::post('logout-current', 'logout_current');
    Route::post('logout-others', 'logout_others');

});

Route::prefix('init')->controller(InitController::class)->group(function () {
    Route::get('migrations', 'migrations');
    Route::get('controllers', 'controllers');
    Route::get('models', 'models');
   
});

Route::prefix('system')->controller(SystemController::class)->group(function () {
    Route::get('models', 'models');
    Route::get('controllers', 'controllers');
    Route::get('migrations', 'migrations');
});

Route::middleware(['auth:sanctum'])->group(function(){
    Route::apiResources([
        'comments'       => CommentsController::class,
        'posts'          => PostController::class,
        'post-statuses'  => PostStatusController::class,
        'reactions'      => ReactionController::class,
        'reaction-types' => ReactionTypeController::class,
        'replies'        => ReplyController::class,
        'users'          => UserController::class,
        'tasks'          =>  TaskController::class,
        'TaskComments'  =>TaskCommentController::class,
    'TaskNotifications' =>TaskNotificationsController::class,
    'TaskUsers'     =>  TaskUserController::class,
        ]);
        });



Route::fallback(function () {
    return response()->json([
        'message' => 'Not Found'
    ], 404);
});