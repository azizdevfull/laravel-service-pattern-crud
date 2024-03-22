<?php

namespace App\Services;

use App\Http\Requests\StoreCategoryRequest;
use App\Interfaces\CategoryServiceInterface;
use App\Models\Category;

class CategoryService implements CategoryServiceInterface
{
    public function getCategories()
    {
        return Category::all();
    }

    public function createCategory(StoreCategoryRequest $request)
    {
        return Category::create($request->validated());
    }

    public function getCategory(string $id)
    {
        return Category::find($id);
    }
}
