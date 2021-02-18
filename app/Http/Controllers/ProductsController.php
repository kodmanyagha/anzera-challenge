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
        $result = Product::offset($start)->limit($length)->get();

        return ['start' => $start, 'length' => $length, 'result' => $result];
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
        /** @var Product $product */
        $product = Product::findOrFail($id);
        $product->user;
        $product->category;

        return $product;
    }

    public function update(int $id)
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }
}
