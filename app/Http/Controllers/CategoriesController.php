<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoriesController extends Controller
{
    //

    public function index()
    {

        $categories = Category::all();
        return view('Categories.categories',['categories'=>$categories]);
    }
}
