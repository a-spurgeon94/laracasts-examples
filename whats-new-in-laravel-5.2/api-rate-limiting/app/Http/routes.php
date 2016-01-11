<?php

Route::get('/', function() {
    return ['some' => 'page'];
});

Route::get('/api/search/{term}', function($term) {
    return [
        'results' => $term
    ];
})->middleware('throttle:3'); // Throttle # requests to :X,Y mins (:60,1 default)