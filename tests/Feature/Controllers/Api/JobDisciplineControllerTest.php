<?php

declare(strict_types=1);


it('can render the job discipline documentation', function (): void {
    $response = $this->get('/docs/api/organizations/job-disciplines');

    $response->assertOk();
});
