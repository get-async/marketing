<?php

declare(strict_types=1);

namespace App\Http\Controllers\Docs\Concepts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class HierarchicalStructureController extends Controller
{
    public function index(Request $request): View
    {
        return view('docs.concepts.hierarchy-structure');
    }
}
