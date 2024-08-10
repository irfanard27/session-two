<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
  protected $viewPath = 'product';

  protected $model = Product::class;

  public function create()
  {
    $categories = Category::all();

    return view("$this->viewPath.create")->with('categories', $categories);
  }

  public function edit($id)
  {
    $model = $this->model::find($id);
    $categories = Category::all();

    return view("$this->viewPath.edit")->with('categories', $categories)->with('data', $model);
  }
}
