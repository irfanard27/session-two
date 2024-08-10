<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
  protected $viewPath = 'category';

  protected $model = Category::class;
}
