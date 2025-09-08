<?php

declare(strict_types=1);

namespace App\Http\Controllers\Docs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class DocController extends Controller
{
    public function index(Request $request): View
    {
        return view('docs.api.introduction');
    }
}
