<?php 
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function(){
	Route::get('/', 'Admin\DashboardController@getDashboard');
	Route::get('/products', 'Admin\Products@getProducts');
	Route::get('/users', 'Admin\Users@getUsers');
});
?>