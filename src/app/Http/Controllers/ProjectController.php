<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index () {
      return view(project.index);
    }

    public function create () {
      return view(project.create);
    }

    public function uodate () {
      return view(project.update);
    }

    public function delete () {
      return view(project.delete);
    }
}
