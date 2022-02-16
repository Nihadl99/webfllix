<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ('accueil');
});

route::get('/bonjour',function(){
    return view('Hello',[
        'name'=> 'Fiorella',
        'numbers' =>[1, 3, 7],
    ]);

});

route::get('/a-propos',function(){
    return view('équipe de developpement',[
        'name'=> 'A Propos',
        'team'=>['Fiorella', 'Marina', 'Matthieu'],
    ]);

});
Route::get('/a-propos/{user}',function($user){
    return view('about-show',[
        'user' => $user
    ]);
});

Route::get('/au-revoir',function(){
    return view('good-bye');
});

Route::get('/bonjour/{name}',function($equipe){
    return view('Hello',[
    'name' => $equipe,
    'numbers'=>[],
    ]); 
    
});
