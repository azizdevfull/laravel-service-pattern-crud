<?php

namespace App\Interfaces;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

interface CategoryServiceInterface
{
    public function getCategories();

    public function createCategory(StoreCategoryRequest $request);

    public function getCategory(string $id);

    public function updateCategory(UpdateCategoryRequest $request, string $id);
}
