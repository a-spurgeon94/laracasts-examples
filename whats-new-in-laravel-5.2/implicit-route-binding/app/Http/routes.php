<?php

// Implicit binding binds to the primary key of the model
// Don't need to manually bind wildcard 'user' to user model
// When it is on something other than primary key, bind manually
// in the RouteServiceProvider

// Binds 'username' to username of the user
// Example - /users/Emmitt.Glover
Route::get('users/{username}', function(App\User $username) {
    return $username;
});

// Implicit bind 'user' to user
// Example - /implicit/users/3
Route::get('implicit/users/{user}', function(App\User $user) {
    return $user;
});
