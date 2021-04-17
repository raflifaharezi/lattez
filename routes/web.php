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
    return redirect('sales');
});
Route::group(['middleware' => ['auth']],function (){
    Route::get('/sales', 'Lattez\SalesandBonusController@index')->name('sales');
    Route::post('/sales/choose-package', 'Lattez\SalesandBonusController@choosePackage')->name('package.choose');
    Route::get('/transaction-history','Lattez\TransactionHistoryController@index')->name('transaction');
    Route::get('/bonus-statement', 'Lattez\BonusStatementController@index')->name('bonus-statement');
    Route::get('/profile', 'Lattez\ProfileController@index')->name('profile');
    Route::get('/orders', 'Lattez\OrdersController@index')->name('orders');


    Route::post('orders', 'Lattez\OrdersController@city')
    ->name('region.city');

    Route::post('district', 'Lattez\OrdersController@district')
    ->name('region.district');

    Route::get('/home', 'HomeController@index')->name('home');
});
Auth::routes();
