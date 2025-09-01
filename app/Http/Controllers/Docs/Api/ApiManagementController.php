<?php

declare(strict_types=1);

namespace App\Http\Controllers\Docs\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class ApiManagementController extends Controller
{
    public function index(Request $request): View
    {
        $marketingPage = $request->attributes->get('marketingPage');

        return view('docs.api.account.api-management', [
            'marketingPage' => $marketingPage,
        ]);
    }
}
