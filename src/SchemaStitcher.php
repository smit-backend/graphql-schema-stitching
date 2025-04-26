<?php

declare(strict_types=1);

namespace SmitBackend\GraphFederate;

use SmitBackend\GraphFederate\Contracts\SubgraphDriverInterface;

/**
 * Class SchemaStitcher
 *
 * @package SmitBackend\GraphFederate
 */
class SchemaStitcher implements SubgraphDriverInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
