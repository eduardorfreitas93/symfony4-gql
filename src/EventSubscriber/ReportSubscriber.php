<?php
declare(strict_types=1);

namespace App\EventSubscriber;

use App\Event\Example\ExampleEvent;
use App\Service\Example\Command\ExampleCommand;
use League\Tactician\CommandBus;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ReportSubscriber implements EventSubscriberInterface
{

    /**
     * @var CommandBus
     */
    protected $bus;

    public function __construct(CommandBus $bus)
    {
        $this->bus = $bus;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ExampleEvent::getName() => 'example_teste.created',
        ];
    }

    public function whenReportInspectionCreated(ExampleEvent $event): void
    {
//        $this->bus->handle(new ExampleCommand($event));
    }
}
