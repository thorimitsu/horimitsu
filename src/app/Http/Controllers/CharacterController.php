<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharacterController extends Controller
{
  public function index () {
    return view(character.index);
  }

  public function create () {
    return view(character.create);
  }

  public function uodate () {
    return view(character.update);
  }

  public function delete () {
    return view(character.delete);
  }
}
