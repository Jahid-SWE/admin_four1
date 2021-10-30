<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('category.manage');
    }
    public function create(Request $request){
        Category::newCategory($request);
        return redirect()->back()->with('message','New category Has saved Successfully');
    }
}
