<?php

namespace App\Services;

use App\Interfaces\CategoryServiceInterface;
use App\Models\Category;

class CategoryService implements CategoryServiceInterface
{
    public function getCategories()
    {
        return Category::all();
    }
}
