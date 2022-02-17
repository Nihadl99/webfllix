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
route::get('/',function(){
    return view('accueil');
});

route::get('/bonjour',[politessecontroller::class, 'HelloEveryone']);
route::get('/au-revoir',[politessecontroller::class, 'GoodBye']);
route::get('/bonjour/{name}',[politessecontroller::class, 'HelloSomeone']);

route::get('/a-propos',[AboutController::class,'index']);
route::get('/a-propos/{user}',[AboutController::class,'show']);


route::get('/exercice/catégories',function(){
    return view('exercice.categories',[
        'categories' => Category::all()
    ]);
});


route::get('/exercice/catégories/creer',function(){
    //le modèle category correspond à la table categorie
    $category = category::create([
        'name'=> 'test'
    ]);

    return redirect('/exercice/categories');
});


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
