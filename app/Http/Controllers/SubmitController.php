<?php

namespace App\Http\Controllers;

use App\submits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubmitController extends Controller
{
    public function store(request $request)
    {
        submits::store($request->all());
        return Redirect::route('thankYou');
    }

}
