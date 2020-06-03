<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScenarioController extends Controller
{
  public function index () {
    return view(scenario.index);
  }

  public function create () {
    return view(scenario.create);
  }

  public function uodate () {
    return view(scenario.update);
  }

  public function delete () {
    return view(scenario.delete);
  }
}
