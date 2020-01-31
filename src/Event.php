<?php

declare(strict_types=1);

namespace SyliusLabs\Polyfill\Symfony\EventDispatcher;

use Symfony\Contracts\EventDispatcher\Event as ContractEvent;
use Symfony\Component\EventDispatcher\Event as ComponentEvent;

if (class_exists(ComponentEvent::class)) {
    class Event extends ComponentEvent
    {
    }
} else {
    class Event extends ContractEvent
    {
    }
}
