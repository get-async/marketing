<?php

declare(strict_types=1);

namespace App\Http\Controllers\Docs\Api\Organization;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

final class JobFamilyController extends Controller
{
    public function index(): View
    {
        return view('docs.api.organizations.job-family');
    }
}
