<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

final class MarketingController extends Controller
{
    public function index(Request $request): View
    {
        $marketingPage = $request->attributes->get('marketingPage');

        return view('index', [
            'marketingPage' => $marketingPage,
        ]);
    }
}
