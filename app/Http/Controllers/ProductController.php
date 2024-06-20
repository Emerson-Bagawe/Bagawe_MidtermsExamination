<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $movies = [
            'horror'=>'Valley of the Dead',
            'action'=>'The Beekeeper',
            'adventure'=>'Oblivion',
            'romance'=>'The Tearsmith',
            'comedy'=>'Lift'
        ];
    return view('Product',['movies'=>$movies]);
    }
}
