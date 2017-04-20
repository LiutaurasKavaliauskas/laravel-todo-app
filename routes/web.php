<?php

Route::get('/', function (){
    return redirect('login');
});

Auth::routes();

Route::resource('todo', 'TodoController');