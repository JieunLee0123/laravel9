<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
  function getUserData(Request $req)
  {
    $req->validate([
      'email'=>'required | max:10',
      'password'=>'required | min:5',
    ]);
    return $req->input();
  }
}
