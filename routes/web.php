<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\ExploreUserController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\UpdateProfileInformationController;

Route::view('/', 'welcome');
Route::middleware('auth')->group(function () {
    Route::get('timeline', TimelineController::class)->name('timeline');
    Route::post('status', [StatusController::class, 'store'])->name('status.store');

    Route::get('profile/{user}', ProfileInformationController::class)->name('profile');

    Route::get('profile/{user}/following',[FollowingController::class,'following'])->name('profile.following');
    Route::get('profile/{user}/followers',[FollowingController::class,'followers'])->name('profile.followers');
    Route::post('profile/{user}',[FollowingController::class,'store'])->name('following.store');

    Route::get('edit',[UpdateProfileInformationController::class,'edit'])->name('profile.edit');
    Route::put('update',[UpdateProfileInformationController::class,'update'])->name('profile.update');

    Route::get('password/edit',[UpdatePasswordController::class,'edit'])->name('password.edit');
    Route::put('password/edit',[UpdatePasswordController::class,'update']);

    Route::get('explore', ExploreUserController::class)->name('users.index');
});

require __DIR__ . '/auth.php';
