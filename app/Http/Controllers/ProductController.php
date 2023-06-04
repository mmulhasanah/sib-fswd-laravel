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
            "name" => "Android Trace Mug Black", 
            "description" => "Start your day off right with that perfect cup of coffee using this Android Trace Mug Black.", 
            "features" => "<p>12 oz. stoneware</p> <p>Matte finish</p>", 
            "price" => "9.99", 
            "keywords" => "Android Black C-Handle Mug, android mugs, black android mug, c handle mug, android c handle,Android Trace Mug Black,", 
            "url" => "Android+Trace+Mug+Black", 
            "category" => "drinkware", 
            "subcategory" => "drinkware" 
            ], 
            [
               "id" => "GGOEGDHC087099", 
               "name" => "Google Thermal Bottle Blue", 
               "description" => "Insulated to keep contents hot or cold for hours, this beautiful bottle is a great year-round companion. 17 oz.", 
               "features" => "<p>Double wall construction</p> <p>Stainless steel thermal bottle with copper vacuum insulation</p> <p>Threaded stainless steel lid</p>", 
               "price" => "23.99", 
               "keywords" => "Google Thermal Bottle Blue, Google, google thermal bottle blue, Google Blue, Thermal Bottle Blue,", 
               "url" => "Google+Thermal+Bottle+Blue", 
               "category" => "drinkware", 
               "subcategory" => "drinkware" 
            ], 
            [
                  "id" => "GGOEGDHH087299", 
                  "name" => "Google Thermal Bottle Green", 
                  "description" => "Insulated to keep contents hot or cold for hours, this beautiful bottle is a great year-round companion. 17 oz.", 
                  "features" => "<p>Double wall construction</p> <p>Stainless steel thermal bottle with copper vacuum insulation</p> <p>Threaded stainless steel lid</p>", 
                  "price" => "23.99", 
                  "keywords" => "Google Thermal Bottle Green, Google, google thermal bottle green, Google Green, Thermal Bottle Green,", 
                  "url" => "Google+Thermal+Bottle+Green", 
                  "category" => "drinkware", 
                  "subcategory" => "drinkware" 
            ], 
            [
                     "id" => "GGOEGDHQ093399", 
                     "name" => "Google Thermal Bottle White", 
                     "description" => "Insulated to keep contents hot or cold for hours, this Google bottle is a great year-round companion. 17 oz.", 
                     "features" => "<p>17 oz</p> <p>Double wall construction</p> <p>Stainless steel thermal bottle with copper vacuum insulation</p><p>Threaded stainless steel lid</p>", 
                     "price" => "23.99", 
                     "keywords" => "Google Thermal Bottle White , Google bottles, white bottle, thermal bottle white, thermal bottle with box, thermal bottle white with box, Google drinkware", 
                     "url" => "Google+Thermal+Bottle+White+with+box", 
                     "category" => "drinkware", 
                     "subcategory" => "drinkware" 
            ], 
            [        
                        "id" => "GGOEGDHR086999", 
                        "name" => "Google Thermal Bottle Red", 
                        "description" => "Insulated to keep contents hot or cold for hours, this beautiful bottle is a great year-round companion. 17 oz.", 
                        "features" => "<p>Double wall construction</p> <p>Stainless steel thermal bottle with copper vacuum insulation</p><p>Threaded stainless steel lid</p>", 
                        "price" => "23.99", 
                        "keywords" => "Google Thermal Bottle Red, Google, google thermal bottle red, Google Red, Thermal Bottle Red,", 
                        "url" => "Google+Thermal+Bottle+Red", 
                        "category" => "drinkware", 
                        "subcategory" => "drinkware" 
            ], 
            [
                           "id" => "GGOEGDHT087199", 
                           "name" => "Google Thermal Bottle Yellow", 
                           "description" => "Insulated to keep contents hot or cold for hours, this beautiful bottle is a great year-round companion. 17 oz.", 
                           "features" => "<p>Double wall construction</p> <p>Stainless steel thermal bottle with copper vacuum insulation</p><p>Threaded stainless steel lid</p>", 
                           "price" => "23.99", 
                           "keywords" => "Google Thermal Bottle Yellow, Google, google thermal bottle yellow, Google Yellow, Thermal Bottle Yellow,", 
                           "url" => "Google+Thermal+Bottle+Yellow", 
                           "category" => "drinkware", 
                           "subcategory" => "drinkware" 
            ], 
            [
                              "id" => "GGOEGDWQ087699", 
                              "name" => "Google Hub Mug White", 
                              "description" => "Enjoy a cup of coffee or tea with this Google stoneware mug.", 
                              "features" => "<p>16 oz. Stoneware</p> <p>Hand wash recommended</p><p>Microwave safe</p>", 
                              "price" => "12.99", 
                              "keywords" => "Google Hub Mug White, Google Mugs, hub mug white, Google White Mugs, mugs, white mug, hub white mug, Google White Hub Mug", 
                              "url" => "Google+Hub+Mug+White", 
                              "category" => "drinkware", 
                              "subcategory" => "drinkware" 
            ], 
            [
                                 "id" => "GGOEYDHB086099", 
                                 "name" => "YouTube Transmission Bottle Black", 
                                 "description" => "Keep your favorite drink cold during those long workouts with this YouTube Transmission Bottle. 17 oz.", 
                                 "features" => "<p>17 oz. double wall thermal bottle</p> <p>Stainless steel</p> <p>Threaded stainless steel insulated lid</p><p>Copper vacuum insulation</p>", 
                                 "price" => "23.99", 
                                 "keywords" => "Play Black Force 17oz Bottle, youtube 17 oz bottle, play back bottle, play back force bottle, 17 oz bottles, youtube black force YouTube Play Black Force Bottle YouTube Transmission Bottle Black", 
                                 "url" => "Play+Black+Force+17oz+bottle", 
                                 "category" => "drinkware", 
                                 "subcategory" => "drinkware" 
            ],                                                                             
        ]; 

        return view('product.index', ['data' => $products]);
    }
}
