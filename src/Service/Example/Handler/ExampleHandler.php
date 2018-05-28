<?php
declare(strict_types=1);

namespace App\Service\Example\Handler;

use App\Entity\Example;
use App\Entity\Role;
use App\Entity\User;
use App\Event\EventRecorder;
use App\Event\Example\ExampleEvent;
use App\Repository\ExampleRepository;
use App\Repository\UserRepository;
use App\Service\Example\Command\ExampleCommand;
use App\Service\HandlerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ExampleHandler implements HandlerInterface
{
    /**
     * @var ExampleRepository
     */
    private $exampleRepository;

    /**
     * @var EventRecorder
     */
    private $eventRecorder;

    private $passwordEncoder;

    private $userRepository;


    public function __construct(
        ExampleRepository $exampleRepository,
        UserRepository $userRepository,
        EventRecorder $eventRecorder,
        UserPasswordEncoderInterface $passwordEncoder
    ) {
        $this->eventRecorder = $eventRecorder;
        $this->exampleRepository = $exampleRepository;
        $this->passwordEncoder = $passwordEncoder;
        $this->userRepository = $userRepository;
    }

    public function handle(ExampleCommand $command): void
    {
//        $user = new User();
//
//        $user->setUsername('eduardo');
//
//        $password = $this->passwordEncoder->encodePassword($user, 'abcd1234');
//echo '<pre>'; \Doctrine\Common\Util\Debug::dump($password);die();


        echo '<pre>'; \Doctrine\Common\Util\Debug::dump($command->getUser());die();

        $example = new Example($command->getName(), $command->getNuId());

        $this->exampleRepository->save($example);

//        $this->eventRecorder->record(new ExampleEvent($command->getName()));
    }
}