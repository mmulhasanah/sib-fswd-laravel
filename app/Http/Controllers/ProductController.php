<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                "id" => "GGOEADHB086299", 
                "category" => "drinkware", 
                "name" => "Android Trace Mug Black", 
                "price" => "8000000", 
                "sale_price" => "7420000", 
                "brand" => "Samsung"
            ],              
            [
                "id" => "GGOEADHB086299", 
                "category" => "drinkware", 
                "name" => "Android Trace Mug Black", 
                "price" => "8000000", 
                "sale_price" => "7420000", 
                "brand" => "Apple"
            ],              
            [
                "id" => "GGOEADHB086299", 
                "category" => "drinkware", 
                "name" => "Android Trace Mug Black", 
                "price" => "8000000", 
                "sale_price" => "7420000", 
                "brand" => "Logitech"
            ],             
            [
                "id" => "GGOEADHB086299", 
                "category" => "drinkware", 
                "name" => "Android Trace Mug Black", 
                "price" => "8000000", 
                "sale_price" => "7420000", 
                "brand" => "Asus"
            ],             
            [
                "id" => "GGOEADHB086299", 
                "category" => "drinkware", 
                "name" => "Android Trace Mug Black", 
                "price" => "8000000", 
                "sale_price" => "7420000", 
                "brand" => "Lenovo"
            ],              
            [
                "id" => "GGOEADHB086299", 
                "category" => "drinkware", 
                "name" => "Android Trace Mug Black", 
                "price" => "8000000", 
                "sale_price" => "7420000", 
                "brand" => "Baseus"
            ],                  
            [
                "id" => "GGOEADHB086299", 
                "category" => "drinkware", 
                "name" => "Android Trace Mug Black", 
                "price" => "8000000", 
                "sale_price" => "7420000", 
                "brand" => "Appple"
            ],                                                                     
        ]; 

        return view('product.index', ['data' => $products]);
    }
}
