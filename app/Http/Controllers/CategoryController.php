<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;



class CategoryController extends Controller
{
    //
    public function viewcategory()
    {
        return view("admin.category.viewcategory");
    }
    public function categorylist()
    {
        $categories = Category::all();
        return view("admin.category.categorylist")->with('categories',  $categories);
    
    }
    public function addcategory()
    {
        return view("admin.category.addcategory");

    }

    public function store(Request $request)
    {
        $request->validate([
            // 'categoryid' => 'required',
            'categoryname' => 'required|max:50',
        ]);
         
    
        $category = new Category();
        // $category->categoryid = $request->categoryid;
        $category->categoryname = $request->categoryname;
    
        $category->save();
    
    
        return redirect("admin/category")->with("success", "Category added.");
    }
}
