<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use Session;

class WebsiteController extends Controller
{
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $result = Event::paginate(3);
        return view('website_view.index', compact('result'));
    }

   
}
