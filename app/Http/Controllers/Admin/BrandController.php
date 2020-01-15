<?php

namespace App\Http\Controllers\Admin;

use App\Model\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(10);

        return view('admin.brand.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request, Brand $brand)
    {
        $this->validate($request, [
            'name' => 'required|unique:brands,name',
        ]);

        $brand = Brand::create(['name' => $request->input('name')]);

        return redirect()->route('admin.brand.index')
            ->with('success', 'Brand Created Successfully');
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);

        return view('admin.brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $brand->name = $request->input('name');
        $brand->save();

        return redirect()->route('admin.brand.index')
            ->with('success', 'Brand Updated Successfully');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('admin.brand.index')
            ->with('success', 'Brand Deleted Successfully');
    }
}
