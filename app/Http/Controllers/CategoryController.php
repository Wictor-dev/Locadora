<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function categories() {
        $categories = Category::all();
        return view('categories',['categories' => $categories]);
    }
    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $category = new Category;    
        $category->name_category = $request->name_category;

        $category->save();

        return redirect('/categories')->with('msg','Categoria criada com sucesso!');
    }

    public function edit($id){
        $category = Category::findOrFail($id);

        return view('category.edit',['category'=>$category]);
    }

    public function update(Request $request){
        Category::findOrFail($request->id)->update($request->only(['name_category']));

        return redirect('/categories')->with('msg', 'Categoria editada com sucesso!');
    }

    public function destroy($id){
        Category::findOrFail($id)->delete();
        return redirect('/categories')->with('msg','Categoria excluída com sucesso!');
    }

}
