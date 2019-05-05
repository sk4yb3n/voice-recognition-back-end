<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandResponseController extends Controller
{
    public function getResponse(Request $request) {
        return $request;
    }
}
