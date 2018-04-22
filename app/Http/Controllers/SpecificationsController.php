<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specifications;
use Illuminate\Support\Facades\Redirect;

class SpecificationsController extends Controller
{
    public function show() {

    }

    public function create(Request $request) {
        $specification = new Specifications();
        $specification->fill($request->all());
        $specification->save();
        return Redirect::route('remerciement');
    }

    public function endOfCreate() {
        return view('thanks');
    }
}
