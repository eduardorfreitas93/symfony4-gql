<?php
declare(strict_types=1);

namespace App\Service\Example\Handler;

use App\Event\EventRecorder;
use App\Event\Example\ExampleEvent;
use App\Service\Example\Command\ExampleCommand;
use App\Service\HandlerInterface;

class ExampleHandler implements HandlerInterface
{
    /*
     * @var ExampleRepository
     */
//    private $exampleRepository;

    /**
     * @var EventRecorder
     */
    private $eventRecorder;


    public function __construct(
//        ExampleRepository $exampleRepository,
        EventRecorder $eventRecorder
    )
    {
        $this->eventRecorder = $eventRecorder;
//        $this->exampleRepository = $exampleRepository;
    }

    public function handle(ExampleCommand $command): void
    {

        /* ** Logic ** */

//        $example = new Example(
//            $command->getName(),
//            $command->getArr(),
//            $command->getNuId(),
//            $command->getNumValue(),
//            $command->isBoolFl()
//        );
//
//        $this->exampleRepository->save($example);

//        $this->eventRecorder->record(new ExampleEvent($command->getName()));
    }
}