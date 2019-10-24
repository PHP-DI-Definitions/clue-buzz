<?php declare(strict_types=1);

use Clue\React\Buzz\Browser;
use React\EventLoop\LoopInterface;
use React\Socket\ConnectorInterface;
use function DI\factory;

return [
    Browser::class => factory(function (
        ConnectorInterface $connector,
        LoopInterface $loop
    ) {
        return new Browser(
            $loop,
            $connector
        );
    }),
];
