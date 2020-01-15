<?php

namespace App\Http\Controllers\Admin;

use App\Model\Brand;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        $brand = Brand::get();

        return view('admin.category.create', compact('brand'));
    }

    public function store(Request $request)
    {
        //return $request->all();

        $this->validate($request, [
            'name' => 'required|unique:categories,name',
            'brand' => 'required',
        ]);

        $category = Category::create(['name' => $request->input('name')]);
        $category->brands()->sync($request->brand);

        return redirect()->route('admin.category.index')
            ->with('success', 'Category Created Successfully');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $brands = Brand::get();
        $brandCategory = DB::table('brand_category')
                ->where('brand_category.category_id', $id)
                ->pluck('brand_category.brand_id', 'brand_category.brand_id')
                ->all();

        return view('admin.category.edit', compact('category', 'brands', 'brandCategory'));
    }

    public function update(Request $request, Category $category)
    {
        // dd($request->all());

        //$category->brands()->sync($request->brand);
        //$category->name = $request->input('name');
        $category->update($request->all());

        return redirect()->route('admin.category.index')
            ->with('success', 'Category Updated Successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.category.index')
            ->with('success', 'Category Deleted Successfully');
    }
}
