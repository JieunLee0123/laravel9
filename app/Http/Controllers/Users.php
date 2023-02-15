<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
  function viewLoad()
  {
    $usersData=['Pizza', 'Chocolate', 'Icecream'];
    return view('users', ['usersData'=>$usersData]);
  }
}
