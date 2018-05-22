<?php
declare(strict_types=1);

namespace App\Event;

class EventRecorder
{
    /**
     * @var Event[]|array
     */
    private $recordedEvents = [];

    public function releaseEvents(): array
    {
        $events = $this->recordedEvents;
        $this->eraseEvents();
        return $events;
    }

    public function eraseEvents()
    {
        $this->recordedEvents = [];
    }

    public function record(AbstractEvent $event)
    {
        $this->recordedEvents[] = $event;
    }
}