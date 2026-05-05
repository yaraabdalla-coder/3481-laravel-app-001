<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InitController;
use App\Http\Controllers\SystemController;
USE App\Http\Controllers\TaskController;
use App\Http\Controllers\{
    CommentController,
    PostController,
    PostStatusController,
    ReactionController,
    ReactionTypeController,
    ReplyController,
    UserController,
    
};

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

Route::apiResources([
    'comments'       => CommentController::class,
    'posts'          => PostController::class,
    'post-statuses'  => PostStatusController::class,
    'reactions'      => ReactionController::class,
    'reaction-types' => ReactionTypeController::class,
    'replies'        => ReplyController::class,
    'users'          => UserController::class,
    'tasks' => TaskController::class,
]);



Route::fallback(function () {
    return response()->json([
        'message' => 'Not Found'
    ], 404);
});