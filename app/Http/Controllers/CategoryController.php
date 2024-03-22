<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(protected CategoryService $categoryService)
    {
    }
    public function index()
    {
        return response()->json($this->categoryService->getCategories());
    }


    public function store(StoreCategoryRequest $request)
    {
        return response()->json($this->categoryService->createCategory($request));
    }

    public function show(string $id)
    {
        return response()->json($this->categoryService->getCategory($id));
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
