<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Specifications;

class SpecificationsController extends Controller
{
    public function get($id){

    }

    public function show() {
        return view('back-end.specification');
    }

    public function liste() {
        $specifications = Specifications::all();
        return view('back-end.specifications')->with('specifications', $specifications);
    }
}
