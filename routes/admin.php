<?php 
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function(){
	Route::get('/', 'Admin\DashboardController@index');
	Route::get('/users', 'Admin\UserController@index');

	// Products
	Route::get('/products', 'Admin\ProductController@index');
	Route::get('/products/add', 'Admin\ProductController@add');
});
?>