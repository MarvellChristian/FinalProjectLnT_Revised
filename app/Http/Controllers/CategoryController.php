<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories/index', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'category' => 'required',
        ]);

        Category::create([
            'category' => $request->category,
        ]);

        return redirect('/category')->with('success_msg', 'New Category Added Successfully!');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('categories/edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'category' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'category' => $request->category,
        ]);

        return redirect('/category')->with('success_msg', 'Category Updated Successfully!');
    }

    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/category')->with('success_msg', 'Category Deleted Successfully!');
    }
}