<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  //
  protected $viewPath = '';

  protected $model = Model::class;

  public function index()
  {
    $models = $this->model::all();
    return view("$this->viewPath.index")->with('data', $models);
  }

  public function create()
  {
    return view("$this->viewPath.create");
  }

  public function store(Request $request)
  {
    $this->model::create($request->all());
    return redirect("/$this->viewPath");
  }

  public function show($id)
  {
    $model = $this->model::find($id);
    return view("$this->viewPath.show", compact('model'));
  }

  public function edit($id)
  {
    $model = $this->model::find($id);
    return view("$this->viewPath.edit", compact('model'));
  }

  public function update(Request $request, $id)
  {
    $model = $this->model::find($id);
    $model->update($request->all());
    return redirect("/$this->viewPath");
  }

  public function destroy($id)
  {
    $model = $this->model::find($id);
    $model->delete();
    return redirect("/$this->viewPath");
  }
}
