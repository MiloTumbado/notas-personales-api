<?php
use Illuminate\Support\Facades\Route;
Route::get('categories','Api\NoteController@categories');
Route::apiResource('notes','Api\NoteController');
