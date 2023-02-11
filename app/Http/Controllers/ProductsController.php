<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index() {
        $title = 'This is KaitoKid Blog';
        $name = 'Viet';
        //Can use with or compact send data to view
        //with only use one parameter, compact use multiple parameters
        //Send an associative array
        $cars = ['Honda','Yamaha','Suzuki'];
        $students = [
            'name'=>'Viet',
            'age'=>24,
            'address'=>'Ha Tinh',
            'email'=>'leviet1612@gmail.com',
        ];
        return view('products.index', compact('students'));
    }

    public function show($id)
    {
        return 'hello'.$id;
    }

    public function detail($productName, $id)
    {
        return $productName.$id;
    }
}
