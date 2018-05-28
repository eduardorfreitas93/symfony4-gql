<?php
declare(strict_types=1);

namespace App\Service\Example\Command;

use App\Entity\User;

class ExampleCommand
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $nuId;

    /**
     * @var User
     */
    private $user;

    public function __construct(
        User $user,
        string $name,
        int $nuId
    )
    {
        $this->user = $user;
        $this->name = $name;
        $this->nuId = $nuId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getNuId(): int
    {
        return $this->nuId;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
