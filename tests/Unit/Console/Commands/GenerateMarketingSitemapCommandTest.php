<?php

declare(strict_types=1);

it('generates a sitemap file', function (): void {
    if (file_exists(public_path('sitemap.xml'))) {
        unlink(public_path('sitemap.xml'));
    }

    // Run the command
    $this->artisan('marketing:generate-sitemap')
        ->expectsOutput('Marketing sitemap generated successfully at public/sitemap.xml')
        ->assertSuccessful();

    // Assert the file was created
    expect(file_exists(public_path('sitemap.xml')))->toBeTrue();

    // Assert it contains expected URLsk
    $content = file_get_contents(public_path('sitemap.xml'));
    expect($content)
        ->toContain('https://async.foundation/')
        ->toContain('https://async.foundation/docs')
        ->not->toContain('_debugbar')
        ->not->toContain('sanctum');
});
