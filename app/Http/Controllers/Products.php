<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;

class Products extends Controller
{
    public function index()
    {
        $start  = (int)request()->get('start');
        $length = (int)request()->get('length');
        return Product::offset($start)->limit($length)->get();
    }

    public function store(ProductRequest $request)
    {
        return $request->input();
    }

    public function read(int $id)
    {
        // TODO: Implement read() method.
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
