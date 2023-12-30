<?php

declare(strict_types=1);

namespace DeathSatan\Hyperf\Hashing;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'publish' => [
                [
                    'id' => 'laravel-hashing',
                    'description' => 'The configuration file for laravel/hashing.',
                    'source' => __DIR__ . '/../publish/hashing.php',
                    'destination' => BASE_PATH . '/config/autoload/hashing.php',
                ],
            ],
        ];
    }
}
