<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
        $nombre = 
        [
            ['title' => 'Rafael'],
            ['title' => 'Jorge'],
            ['title' => 'Carlos'],
            ['title' => 'Adrian'],
            ['title' => 'Luis']
        ];

    return view('about', compact('nombre'));

        
    }
}
