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
    return redirect('orders');
});
Route::group(['middleware' => 'auth'],function (){
    Route::get('/sales', 'Lattez\SalesandBonusController@index')->name('sales');
    Route::post('/sales/choose-package', 'Lattez\SalesandBonusController@choosePackage')->name('package.choose');
    Route::get('/transaction-history','Lattez\TransactionHistoryController@index')->name('transaction-history');
    Route::get('/bonus-statement', 'Lattez\BonusStatementController@index')->name('bonus-statement');
    Route::get('/profile', 'Lattez\ProfileController@index')->name('profile');

    Route::get('/orders', 'Lattez\OrdersController@index')->name('orders');
    Route::post('orders', 'Lattez\OrdersController@city')
    ->name('region.city');
    Route::post('district-region', 'Lattez\OrdersController@district')
    ->name('region.district');
    Route::post('village-region', 'Lattez\OrdersController@village')
    ->name('region.village');
    


    //admin
   


    Route::get('/home', 'HomeController@index')->name('home');

});

Route::group(['prefix' => 'c/admin', 'middleware'=> 'role:admin'], function(){
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/user', 'Admin\UserController@index')->name('user');
    Route::post('/user/create', 'Admin\UserController@create')->name('admin.user.create');
    Route::delete('user/delete/{$id}', 'Admin\UserController@delete')->name('admin.user.delete');

    Route::get('/product', 'Admin\ProductController@index')->name('product');

    Route::get('/transaction','Admin\TransactionCOntroller@index')->name('transaction');

    // Route::post('city', 'Admin\TransactionController@city')
    // ->name('region-city');
    // Route::post('district', 'Admin\TransactionController@district')
    // ->name('region-district');
    // Route::post('village', 'Admin\TransactionController@village')
    // ->name('region-village');

    Route::get('/reward', 'Admin\RewardController@index')->name('reward');
    Route::post('/reward/create', 'Admin\RewardController@create')->name('reward.create');
    Route::delete('reward/delete/{id}', 'Admin\RewardController@delete')->name('admin.reward.delete');
    Route::post('/reward/update', 'Admin\RewardController@update')->name('admin.reward.update');
});
Auth::routes();
