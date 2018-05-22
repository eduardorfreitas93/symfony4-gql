<?php
declare(strict_types=1);

namespace App\Service\Example\Command;

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
     * @var array
     */
    private $arr;

    /**
     * @var boolean
     */
    private $boolFl;

    /**
     * @var float
     */
    private $numValue;

    public function __construct(
        string $name,
        int $nuId,
        array $arr,
        bool $boolFl,
        float $numValue
    )
    {
        $this->name = $name;
        $this->nuId = $nuId;
        $this->arr = $arr;
        $this->boolFl = $boolFl;
        $this->numValue = $numValue;
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

    /**
     * @return array
     */
    public function getArr(): array
    {
        return $this->arr;
    }

    /**
     * @return bool
     */
    public function isBoolFl(): bool
    {
        return $this->boolFl;
    }

    /**
     * @return float
     */
    public function getNumValue(): float
    {
        return $this->numValue;
    }
}
