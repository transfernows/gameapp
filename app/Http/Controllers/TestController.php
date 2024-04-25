<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class TestController extends Controller {

    public function index() {

        users::all();
        
        
    }
}
