<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ApiController extends Controller
{
  protected $model = Model::class;

  public function index()
  {
    $models = $this->model::all();
    return response()->json($models);
  }

  public function store(Request $request)
  {
    $this->model::create($request->all());
    return response()->json('store');
  }

  public function show($id)
  {
    $model = $this->model::find($id);
    return response()->json($model);
  }

  public function edit($id)
  {
    $model = $this->model::find($id);
    return response()->json($model);
  }

  public function update(Request $request, $id)
  {
    $model = $this->model::find($id);
    $model->update($request->all());
    return response()->json('update');
  }

  public function destroy($id)
  {
    $model = $this->model::find($id);
    $model->delete();
    return response()->json('destroy');
  }
}
