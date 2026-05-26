<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct(){
        $shop_data = [
            'name'=>'Makmur jaya abadi',
            'address'=> 'Bondowoso, Jawa Timur',
            'type'=>'Ruko'
        ];

        return view('product', compact('shop_data'));
    } 
}
