<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', function () {
    return view('home'); 
    
    /*"<marquee>
                <h1>Sample</h1>
            </marquee>";*/
            

})->name('home');



Route::get('/create', function(){
    return view('user.create');
});

Route::group(['prefix' => 'user'], function () { 

    Route::get('/{id}', function ($id) {
        return "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>User Page</title>
            <script src='https://cdn.tailwindcss.com'></script>
        </head>
        <body class='bg-gradient-to-r from-slate-900 via-purple-900 to-slate-900 min-h-screen flex items-center justify-center p-6'>
            <div class='bg-white rounded-lg shadow-lg p-8 text-center'>
            <h2 class='text-gray-700 text-lg font-semibold mb-3'>User Edit: " . $id . "</h2>   
            <a href='" . route('userEdit', $id) . "' class='text-purple-700 font-bold text-xl hover:underline'>User Page</a>
            </div>
        </body>
        </html>";
    });

    Route::get('/modify/{id}', function ($id) {

        //return view('user.edit', compact('id'));

        return view('user.edit', ['studentid'=>$id]);
        
        /*"<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Edit User</title>
            <script src='https://cdn.tailwindcss.com'></script>
        </head>
        <body class='bg-gradient-to-r from-slate-900 via-purple-900 to-slate-900 min-h-screen flex items-center justify-center p-6'>
            <div class='bg-white rounded-lg shadow-lg p-8 text-center text-gray-800 font-bold text-xl'>
                Edit User: " . $id . "
            </div>
        </body>
        </html>";*/
    })->name('userEdit');

});

/*Route::fallback(function () {
    return view('errors.404');
});*/


Route::get('dashboard', function(){
    return view('user.dashboard');

});


Route::fallback(Function() {
    return redirect()->route('home');

});

