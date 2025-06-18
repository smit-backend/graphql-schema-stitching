<?php

return [
    'enabled' => env('GRAPHQL_SCHEMA_STITCHING_ENABLED', true),
    'timeout' => env('GRAPHQL_SCHEMA_STITCHING_TIMEOUT', 30),
    'log_channel' => env('GRAPHQL_SCHEMA_STITCHING_LOG', 'stack'),
];
