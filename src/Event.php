<?php

declare(strict_types=1);

namespace SyliusLabs\Polyfill\Symfony\EventDispatcher;

use Symfony\Contracts\EventDispatcher\Event as ContractEvent;
use Symfony\Component\EventDispatcher\Event as ComponentEvent;

if (interface_exists(ContractEvent::class)) {
    class Event extends ContractEvent
    {
    }
} else {
    class Event extends ComponentEvent
    {
    }
}
