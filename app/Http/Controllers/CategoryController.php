<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            [
             "id" => "GGOEADHB086299", 
             "name" => "Android Trace Mug Black"
            ],
               [
             "id" => "GGOEADHB086299", 
             "name" => "Android Trace Mug Black"
            ],
            [
             "id" => "GGOEADHB086299", 
             "name" => "Android Trace Mug Black"
            ],   
            [
             "id" => "GGOEADHB086299", 
             "name" => "Android Trace Mug Black"
            ],   
            [
             "id" => "GGOEADHB086299", 
             "name" => "Android Trace Mug Black"
            ]
        ];
    
        return view('category.index', ['data' => $categories]);
    }
}
