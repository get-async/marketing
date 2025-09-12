<?php

declare(strict_types=1);


it('can render the permissions documentation', function (): void {
    $response = $this->get('/docs/concepts/permissions');

    $response->assertOk();
});
