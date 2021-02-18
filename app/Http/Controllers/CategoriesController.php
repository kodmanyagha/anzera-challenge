<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $start  = (int)request()->get('start');
        $length = (int)request()->get('length');
        if ($length <= 0) $length = 10;

        return Category::orderBy('order_no')->offset($start)->limit($length)->get();
    }

    public function create(CategoryRequest $request)
    {
        $input = $request->all();
        return Category::create($input);
    }

    public function read(int $id)
    {
        /** @var Category $row */
        $row = Category::findOrFail($id);
        $row->products;

        return $row;
    }

    public function update(int $id, CategoryRequest $request)
    {
        /** @var Category $save */
        $save = Category::findOrFail($id);
        return $save->fill($request->all())->save();
    }

    public function delete(int $id)
    {
        Category::findOrFail($id)->delete();
        return;
    }
}
