<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
  function getUserData()
  {
    return DB::select('select * from users');
  }
}
