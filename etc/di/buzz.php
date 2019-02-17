<?php declare(strict_types=1);

use Clue\React\Buzz\Browser;
use React\Dns\Resolver\Resolver;
use React\EventLoop\LoopInterface;
use React\Socket\Connector;
use function DI\factory;

return [
    Browser::class => factory(function (
        Resolver $resolver,
        LoopInterface $loop
    ) {
        return new Browser(
            $loop,
            new Connector(
                $loop,
                [
                    'dns' => $resolver,
                ]
            )
        );
    }),
];
