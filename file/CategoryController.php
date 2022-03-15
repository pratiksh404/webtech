<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function allCategory()
    {
        $categories = Category::all();
        return view('admin.category.allcategory', ['categories' => $categories]);
    }

    public function createCategory()
    {
        return view('admin.category.createcategory');
    }

    public function storeCategory(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('allcategory');
    }

    public function showCategory(Category $category)
    {
        return view('admin.category.showcategory', ['category' => $category]);
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('admin.category.editcategory', ['category' => $category]);
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('allcategory');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('allcategory');
    }
}
