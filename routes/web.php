<?php

use Illuminate\Support\Facades\Route;

Route::get('test-package', function () {
    return view('test-package::index');
});
