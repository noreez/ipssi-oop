<?php

declare(strict_types=1);

use Src\Entity;
use Src\Service;

return [
    'games' => [
        'connect4' => Application\Service\ConnectFourGame::class,
    ],

    'service_manager' => [
        'factories' => [
            Renderer\Output::class => Factory\Renderer\Output::class,
            Service\ConnectFourGame::class => Factory\Service\ConnectFourGame::class,
            // InvokableFactory can be used when the service does not need any constructor argument
            Service\PseudoRandomValue::class => InvokableFactory::class,
        ],
        'aliases' => [
            Service\RandomValue::class => Service\PseudoRandomValue::class,
        ],
    ]
];