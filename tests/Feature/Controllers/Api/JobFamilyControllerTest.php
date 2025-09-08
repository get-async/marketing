<?php

declare(strict_types=1);


it('can render the job family documentation', function (): void {
    $response = $this->get('/docs/api/organizations/job-families');

    $response->assertOk();
});
