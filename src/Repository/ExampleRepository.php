<?php declare(strict_types=1);

namespace App\Repository;

use App\Entity\Example;

class ExampleRepository extends AbstractRepository
{
    public function getEntityClassName(): string
    {
        return Example::class;
    }
}