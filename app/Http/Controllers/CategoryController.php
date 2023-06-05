<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      //  $categories = [
        //    [
          //   "id" => "GGOEADHB086299", 
            // "name" => "Android Trace Mug Black"
       //     ],
       //     [
         //    "id" => "GGOEADHB086299", 
          //   "name" => "Android Trace Mug Black"
           // ],
          //  [
         //    "id" => "GGOEADHB086299", 
        //     "name" => "Android Trace Mug Black"
         //   ],   
        //    [
         //    "id" => "GGOEADHB086299", 
         //    "name" => "Android Trace Mug Black"
         //   ],   
        //    [
          //   "id" => "GGOEADHB086299", 
         //    "name" => "Android Trace Mug Black"
           // ]
         //   ];

        $categories = Category::all();

        //dd($categories);
    
        return view('category.index', compact('categories'));
    }

    public function create()
    {
      return view('category.create');
    }

    public function store(Request $request)
    {
      // masukkan data ke database
      $category = Category::create([
        'name' => $request->name
      ]);

      // redirect ke halaman category.index
      return redirect()->route('category.index');
    }
}

