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
Auth::routes();
Route::get('/games/{category}', 'GamesController@show')->name('games.show');
Route::get('/peripherals/{category}', 'GamesController@show')->name('peripherals.index');
Route::get('/figures/{category}', 'GamesController@show')->name('figures.index');
Route::get('/guides/{category}', 'GamesController@show')->name('guides.index');
Route::get('/thankyou', 'thankYouController@index')->name('thankyou.index');
Route::get('/privacy', 'PrivacyController@index')->name('privacy.index');
Route::get('/cookies', 'CookiesController@index')->name('cookies.index');
Route::get('/terms', 'TermsController@index')->name('terms.index');


Route::any('/search/{action}', [
  'uses' =>'SearchController@request',
  'as' => 'search.request',
  'action' => '.*'
]);

Route::post('/search', [
  'uses' =>'SearchController@results',
  'as' => 'search.results'
]);

Route::get('paypal', [
  'uses' => 'PaymentController@paypalWrapper',
  'as' => 'paypal'
]);

Route::get('payment-success', [
  'uses' => 'PaymentController@getPaymentStatus',
  'as' => 'paymentsuccess'
]);

Route::get('/add-to-cart/{id}', [
  'uses' => 'GamesController@getAddToCart',
  'as' => 'games.addToCart'
]);

Route::get('/remove/{id}', [
  'uses' => 'GamesController@getRemoveItem',
  'as' => 'games.remove'
]);

Route::group(['middleware' => 'auth'], function(){
  Route::get('/shopping-cart', [
    'uses' => 'GamesController@getCart',
    'as' => 'games.shoppingCart'
  ]);
  Route::get('/checkout', [
    'uses' => 'GamesController@getCheckout',
    'as' => 'checkout'
  ]);
  Route::post('/checkout', [
    'uses' => 'GamesController@postCheckout',
    'as' => 'checkout'
  ]);
});


Route::get('/logout', 'Auth\LoginController@logout');

Route::resource('/', 'HomeController', ['names'=>[
  'index'=>'home.index',
  'create'=>'home.create',
  'store'=>'home.store',
  'edit'=>'home.edit',
  'show'=>'home.show',
  'destroy'=>'home.destroy',
  ]]);
Route::resource('/about', 'AboutController', ['names'=>[
  'index'=>'about.index',
  'create'=>'about.create',
  'store'=>'about.store',
  'edit'=>'about.edit',
  'show'=>'about.show',
  'destroy'=>'about.destroy',
  ]]);
Route::group(['middleware' => 'IsAdmin'], function(){

Route::get('/admin', 'AdminController@index')->name('admin.index');
  Route::resource('/admin/games', 'AdminGamesController', [
  'names'=>[
    'index'=>'admin.games.index',
    'create'=>'admin.games.create',
    'store'=>'admin.games.store',
    'edit'=>'admin.games.edit',
    'show'=>'admin.games.show',
    'destroy'=>'admin.games.destroy',
    ]]);

Route::resource('/admin/orders', 'OrderController', [
  'names'=>[
  'index'=>'admin.orders.index',
  'create'=>'admin.orders.create',
  'store'=>'admin.orders.store',
  'edit'=>'admin.orders.edit',
  'show'=>'admin.orders.show',
  'destroy'=>'admin.orders.destroy',
  ]]);
  });
