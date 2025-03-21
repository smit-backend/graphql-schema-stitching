<?php

declare(strict_types=1);

namespace SmitBackend\GraphFederate\Contracts;

/**
 * Interface SubgraphDriverInterface
 *
 * @package SmitBackend\GraphFederate
 */
interface SubgraphDriverInterface
{
    public function execute(array $payload = []): mixed;
}
