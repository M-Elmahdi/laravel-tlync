<?php

namespace Elshaden\Tlync\Http;

use Elshaden\Tlync\Tlync;
use Illuminate\Http\Request;

class TlyncController
{

    public function __construct()
    {
        //
    }

    public function callback(Request $request)
   {
     $response =  app(Tlync::class)->callback($request);
     return response()->json(null ,200);
    }
}
