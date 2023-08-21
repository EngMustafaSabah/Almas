<?php

Route::prefix('/')->group(function () {
    Route::resource('section', SectionController::class);
    Route::resource('page', PageController::class);
});
