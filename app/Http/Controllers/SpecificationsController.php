<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specifications;
use Illuminate\Support\Facades\Redirect;

class SpecificationsController extends Controller
{
    public function show() {
        return view('specification');
    }
    public function create(Request $request) {
        $specification = new Specifications();
        $specification->fill($request->all());

        if ($specification->save()) {
            return view('thanks');
        }
    }
}
