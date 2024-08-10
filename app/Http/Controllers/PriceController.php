<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    protected $viewPath = 'price';
  
    protected $model = Price::class;
  
    public function create()
    {
      $products = Product::all();
  
      return view("$this->viewPath.create")->with('products', $products);
    }
  
    public function edit($id)
    {
      $model = $this->model::find($id);
      $products = Product::all();
  
      return view("$this->viewPath.edit")->with('products', $products)->with('data', $model);
    }
  }
