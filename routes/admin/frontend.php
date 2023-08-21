<?php

Route::prefix('/')->group(function () {

    $classes = [
        'section' => SectionController::class,
        'page' => PageController::class,
        'categories' => CategoryController::class,
        'blogs' => BlogController::class,
        'tags' => TagController::class,
        'comments' => CommentController::class
    ];

    foreach ($classes as $name => $class) Route::resource($name, $class);
});
