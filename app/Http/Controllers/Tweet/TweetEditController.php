<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TweetEditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): View
    {
        $tweet = Tweet::find($id);

        $this->authorize('update', $tweet);

        return view ('tweets.edit', [
            'tweet' => Tweet::find($id),
        ]);
    }
}
