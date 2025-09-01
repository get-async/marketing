<?php

declare(strict_types=1);

use App\Http\Controllers\Marketing;
use Illuminate\Support\Facades\Route;

Route::middleware(['marketing.page'])->group(function (): void {
    Route::get('/', [Marketing\MarketingController::class, 'index'])->name('marketing.index');
    Route::get('/docs', [Marketing\Docs\MarketingDocController::class, 'index'])->name('marketing.docs.index');

    // api docs
    Route::get('/docs/concepts/hierarchical-structure', [Marketing\Docs\Concepts\HierarchicalStructureController::class, 'index'])->name('marketing.docs.concepts.hierarchical-structure');
    Route::get('/docs/api', [Marketing\Docs\Api\ApiIntroductionController::class, 'index'])->name('marketing.docs.api.index');
    Route::get('/docs/api/authentication', [Marketing\Docs\Api\AuthenticationController::class, 'index'])->name('marketing.docs.api.authentication');
    Route::get('/docs/api/profile', [Marketing\Docs\Api\ProfileController::class, 'index'])->name('marketing.docs.api.account.profile');
    Route::get('/docs/api/api-management', [Marketing\Docs\Api\ApiManagementController::class, 'index'])->name('marketing.docs.api.account.api-management');
    Route::get('/docs/api/logs', [Marketing\Docs\Api\LogsController::class, 'index'])->name('marketing.docs.api.account.logs');
    Route::get('/docs/api/organizations', [Marketing\Docs\Api\OrganizationsController::class, 'index'])->name('marketing.docs.api.organizations');
});
