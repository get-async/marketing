<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

/**
 * This command generates a sitemap for all marketing routes.
 */
final class GenerateMarketingSitemapCommand extends Command
{
    protected $signature = 'marketing:generate-sitemap';

    protected $description = 'Generate sitemap for marketing routes';

    public function handle(): void
    {
        $this->generate();

        $this->info('Marketing sitemap generated successfully at public/sitemap.xml');
    }

    public function generate(): void
    {
        $sitemap = Sitemap::create();

        $marketingRoutes = $this->getMarketingRoutes();

        foreach ($marketingRoutes as $route) {
            $url = Url::create($route['url']);

            // Set homepage to daily frequency and priority 1
            if ($route['routeName'] === 'marketing.index') {
                $url->setChangeFrequency('daily')->setPriority(1.0);
            } else {
                $url->setChangeFrequency('weekly')->setPriority(0.8);
            }

            $sitemap->add($url);
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }

    /**
     * Get all marketing routes with their URLs and last modification dates.
     *
     * @return array<int, array<string, mixed>>
     */
    private function getMarketingRoutes(): array
    {
        $routes = [];

        $routeCollection = Route::getRoutes();
        $baseUrl = 'https://async.foundation';

        foreach ($routeCollection->getRoutes() as $route) {
            $routeName = $route->getName();
            $uri = (string) $route->uri();
            // Skip routes we don't want in the sitemap
            if (!$routeName) {
                continue;
            }
            if ($this->shouldSkipRoute($routeName, $uri)) {
                continue;
            }

            $url = $baseUrl . '/' . mb_ltrim($uri, '/');

            $routes[] = [
                'url' => $url,
                'routeName' => $routeName,
            ];
        }

        return $routes;
    }

    /**
     * Determine if a route should be skipped from the sitemap.
     */
    private function shouldSkipRoute(string $routeName, string $uri): bool
    {
        // Skip debugbar routes
        if (str_starts_with($routeName, 'debugbar.') || str_starts_with($uri, '_debugbar')) {
            return true;
        }

        // Skip boost routes
        if (str_starts_with($uri, '_boost')) {
            return true;
        }

        // Skip Sanctum routes
        if (str_starts_with($routeName, 'sanctum.') || str_starts_with($uri, 'sanctum/')) {
            return true;
        }
        // Skip storage routes (they contain parameters)
        return str_contains($uri, '{');
    }
}
