<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TimelineController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('timeline', [
         'tweets' => Tweet::latest('id')->get(),
       ]);
    }
}
