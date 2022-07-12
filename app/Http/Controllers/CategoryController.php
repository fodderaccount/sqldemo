<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()

    {

        $categories = Category::all();

        // return view('admin.listCategory', ['categories' => $categories]);


        return view('listCategory', compact("categories"));
    }
    public function getCreateCat(Request $request)
    {
        return view('createCategory');
    }

    public function postCreateCat(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->save();
        return redirect()->route('AA')->with('success', 'Added');
    }
    public function getEditCat($category_id)
    {
        $data['BB'] = Category::find($category_id);
        return view('editCategory', $data);
    }
    public function postEditCat(Request $request, $category_id)

    {

        $category = Category::find($category_id);

        $category->category_name = $request->category_name;

        $category->category_description = $request->category_description;

        $category->save();

        return redirect()->route('AA');
    }
    public function delete($id)

    {

        $category = Category::find($id);

        $category->delete();

        return back();
    }
}
