<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        return Redirect('/index');  // Redirige à la page indx en arrivant sur le site.
    }
}
