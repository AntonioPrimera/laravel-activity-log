<?php

//-- --- Support ------------------------------------------------------------------------------------------------------
use Illuminate\Support\Facades\Route;

//-- --- Controllers --------------------------------------------------------------------------------------------------
use AntonioPrimera\ActivityLog\Http\Controllers\LogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
//@add prefix from env
Route::get('/log', [LogController::class, 'index'])->name('log.index');
