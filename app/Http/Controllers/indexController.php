<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public $products = [
        ['id' => 1 , 'name' => 'Iphone13','brand'=>'Apple', 'category' => 'Cellulari' , 'price' => 790.00 , 'stock' => 15],
        ['id' => 2 , 'name' => 'Readme note 11','brand'=>'Xiaomi', 'category' => 'Cellulari' , 'price' => 149.00 , 'stock' => 13],
        ['id' => 3 , 'name' => 'Galaxy A14','brand'=>'Samsung', 'category' => 'Cellulari' , 'price' => 152.00 , 'stock' => 21],
        ['id' => 4 , 'name' => 'moto e13','brand'=>'Motorola', 'category' => 'Cellulari' , 'price' => 79.00 , 'stock' => 15],
        ['id' => 5 , 'name' => 'Modern 15','brand'=>'MSI', 'category' => 'Notebook' , 'price' => 449.00 , 'stock' => 15],
        ['id' => 6 , 'name' => 'IdeaPad 3','brand'=>'Lenovo', 'category' => 'Notebook' , 'price' => 649.00 , 'stock' => 15],
        ['id' => 7 , 'name' => 'ExpertBook B1','brand'=>'Asus', 'category' => 'Notebook' , 'price' => 1059.00 , 'stock' => 15],
    ];
        
    public function index () {
        return view('prodotti', ['products' => $this->products]);

    }

    public function show ($id) {
        foreach($this->products as $product) {
            if($id == $product['id']){
                return view ('dettaglio-prodotto',['product'=> $product]); 
            }
        }
    }

}
