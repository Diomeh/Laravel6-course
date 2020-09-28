<?php 
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function(){
	Route::get('/', 'Admin\DashboardController@index');
	Route::get('/users', 'Admin\UserController@index');

	// Products
	Route::get('/products', 'Admin\ProductController@index');
	Route::get('/products/add', 'Admin\ProductController@add');

	// Categories
	Route::get('/categories', function(){ return redirect('/admin/categories/0'); });
	Route::get('/categories/{module}', 'Admin\CategoryController@index');
	Route::post('/category/add', 'Admin\CategoryController@postCategoryAdd');
	Route::get('/category/{id}/edit', 'Admin\CategoryController@getEdit');
	Route::post('/category/{id}/edit', 'Admin\CategoryController@postEdit');
	Route::get('/category/{id}/delete', 'Admin\CategoryController@getDelete');
});
?>