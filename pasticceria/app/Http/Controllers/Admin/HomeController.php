<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dessert;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $desserts = Dessert::all();
        $data = [
            'desserts' => $desserts
        ];

        return view('admin.home')->with($data);
    }
}
