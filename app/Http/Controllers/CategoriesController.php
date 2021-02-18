<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function list()
    {
        return ['aa', 'bb'];
    }

    public function create(CategoryRequest $request)
    {
        $input = $request->all();
        return Category::create($input);
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
