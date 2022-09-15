<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function returnText(Request $request)
    {
        $text = $request->getContent();
        return response()->json([
            'text' => $text
        ]);
    }
}