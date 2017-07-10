<?php

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();


