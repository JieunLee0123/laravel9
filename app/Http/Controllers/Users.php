<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
  function getUserData(Request $req)
  {
    return $req->input();
  }
}
