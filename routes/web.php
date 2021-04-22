'<?php

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
    //$user = \App\User::find(4);
   //return $user->store()->count();

   //$loja = \App\Store::find(1);
   //return $loja->products; | $loja->products()->where('id', 9)->get();
   
   //Criar uma loja para um usuario
/*    $user = \App\User::find(10);
   $store = $user->store()->create([
     'name' => 'Loja teste',
     'description' => 'Loja teste de produtos de informatica',
     'mobile_phone' => 'ZZ-ZZZZ-ZZZZ',
     'phone' => 'ZZ-ZZZZ-ZZZZ',
     'slug' => 'loja-teste'     
   ]);
  
   dd($store); */
   
   //Criar um produto para a loja
/* $store = \App\Store::find(41);
$product = $store->products()->create([
  'name' => 'Notebook Dell',
  'description' => 'CORE I5 10GB',
  'body' => 'Qialquer coisa',
  'price' => 2999.90,
  'slug' => 'notebook=dell'
]);

dd($product); */

//Criar uma categoria
/* \App\Category::create([
  'name' => 'Games',
  'description' => null,
  'slug' => 'games'
]);
\App\Category::create([
  'name' => 'notebooks',
  'description' => null,
  'slug' => 'notebooks'
]);

return \App\Category::all(); */
   
  //Adicionar um produto para uma categoria ou vice-versa
  $product = \App\Product::find(41);
 // dd($product->categories()->sync([2]));
  
return $product->categories;
  
  return \App\User::all();
  
});

/* Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */