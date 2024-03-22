<?php

namespace App\Interfaces;

use App\Http\Requests\StoreCategoryRequest;

interface CategoryServiceInterface
{
    public function getCategories();

    public function createCategory(StoreCategoryRequest $request);

    public function getCategory(string $id);
}
