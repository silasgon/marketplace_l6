<?php

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
    $helloWorld = 'Hello World';
    
    return view('welcome', compact('helloWorld'));
});

Route::get('/model', function(){
    //$products = \App\Product::all();
    
/*     $user = new \App\User();
    
    $user->name = 'Usuario teste 2';
    $user->email = 'email2@test.com';
    $user->password = bcrypt('12345678');

    
   $user->save(); */
   //return \App\User::find(3);
   
   //return \App\User::where('name', 'Usuario teste 2')->get();

  // return \App\User::paginate(10);
/* 
  $user = \App\User::create([
      'name' => 'Silas2 Reis',
      'email'=> 'silas2@silas.com',
      'password' => bcrypt('123456')
  ]);
 */
  //dd($user);
/*   $user = \App\User::find(46);
  $user->update([
    'name' => 'Atuaizando com mass update'  
  ]);
   */
  return\App\User::all();
});

/* Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */