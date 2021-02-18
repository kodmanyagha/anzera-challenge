<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $start  = (int)request()->get('start');
        $length = (int)request()->get('length');
        if ($length <= 0) $length = 10;

        $result = Product::offset($start)->limit($length)->get();
        foreach ($result as &$row) {
            $row->user;
            $row->category;
        }
        return $result;
    }

    public function create(ProductRequest $request)
    {
        $input = $request->all();

        // TODO Initialize the Passport and then set this hardcoded variable to authenticated user's id.
        $input['user_id'] = 1;

        return Product::create($input);
    }

    public function read(int $id)
    {
        /** @var Product $row */
        $row = Product::findOrFail($id);
        $row->user;
        $row->category;

        return $row;
    }

    public function update(int $id, ProductRequest $request)
    {
        /** @var Product $save */
        $save = Product::findOrFail($id);
        return $save->fill($request->all())->save();
    }

    public function delete(int $id)
    {
        Product::findOrFail($id)->delete();
        return;
    }
}
