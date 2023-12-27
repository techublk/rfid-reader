<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\configuration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){

        $configuration = Configuration::first();

        return view('pages.home.index', ['configuration' => $configuration]);
    }
}
