<?php

namespace App\Services;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
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
        return Category::findOrFail($id);
    }

    public function updateCategory(UpdateCategoryRequest $request, string $id)
    {
        $category = $this->getCategory($id);
        return $category->update($request->validated());
    }

    public function deleteCategory(string $id)
    {
        $category = $this->getCategory($id);
        return $category->delete();
    }
}
