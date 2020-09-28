<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Models\Category;
use Validator, Str;

class CategoryController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('isadmin');
	}

	public function index($module)
    {
    	$categories =  Category::where('module', $module)->orderBy('name', 'Asc')->get();
    	$data = ['categories' => $categories];
    	return view('admin.categories.home', $data);
    }

    public function postCategoryAdd(Request $request)
    {
    	$rules = [
    		'name' => 'required',
    		'icon' => 'required'
		];

		$validator = Validator::make($request->all(), $rules);

		if(!($validator->fails())){
			$category = new Category();
			$category->module = $request->input('module');
			$category->name = e($request->input('name'));
			$category->slug = Str::slug($request->input('name'));
			$category->icon = e($request->input('icon'));

			
			if($category->save())
				return back()->with('message', 'Guardado con éxito.')->with('typealert', 'success');
		}
		
    	return back()->with('message', 'Ha ocurrido un errror, por favor intente de nuevo.')
    			->with('typealert', 'danger');
    }

    public function getEdit($id)
    {
    	$category = Category::find($id);
    	$data = ['category' => $category];
    	return view('admin.categories.edit', $data);
    }

    public function postEdit(Request $request, $id)
    {
    	$rules = [
    		'name' => 'required',
    		'icon' => 'required'
		];

		$validator = Validator::make($request->all(), $rules);

		if(!($validator->fails())){
			$category = Category::find($id);
			$category->module = $request->input('module');
			$category->name = e($request->input('name'));
			$category->slug = Str::slug($request->input('name'));
			$category->icon = e($request->input('icon'));

			
			if($category->save())
				return redirect('/admin/categories/'.$category->module)
					->with('message', 'Guardado con éxito.')
					->with('typealert', 'success');
		}
    	return redirect('/admin/categories/'.$category->module)
    			->with('message', 'Ha ocurrido un errror, por favor intente de nuevo.')
    			->with('typealert', 'danger');
    }

    public function getDelete($id)
    {
    	$category = Category::find($id);
    	if($category->delete())
    		return back()->with('message', 'Borrado con éxito.')->with('typealert', 'success');
    	return back()->with('message', 'Ha ocurrido un errror, por favor intente de nuevo.')
    			->with('typealert', 'danger');
    }
}
