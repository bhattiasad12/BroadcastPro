<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailingListController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\PersonalAccessToken;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::resource('subscribers', SubscriberController::class);
    Route::resource('mailinglists', MailingListController::class);

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/verify_token', function (Request $request) {
        $token = PersonalAccessToken::findToken($request['api_token']);
        Log::info($request['api_token']);
        $user = $token->tokenable;
        $user->setAttribute('api_token', $request['api_token']);
        return $user;
    });
});
