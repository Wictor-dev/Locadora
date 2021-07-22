<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $category = new Category;    
        $category->name_category = $request->name_category;

        $category->save();

        return redirect('/category/create');
    }
}
