<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InterceptController extends Controller
{
    //

    public function intercept(Request $request)
    {
        Log::info($request);
    }
}
