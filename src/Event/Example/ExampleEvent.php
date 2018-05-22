<?php
declare(strict_types=1);

namespace App\Event\Example;

use App\Event\AbstractEvent;

class ExampleEvent extends AbstractEvent
{
//    /**
//     * @var Visit
//     */
//    private $visit;
//
//    /**
//     * @var User
//     */
//    private $agent;
//
//    /**
//     * @var Report
//     */
//    private $report;
//
//    /**
//     * @var Property
//     */
//    private $property;
//
//    public function __construct(Visit $visit, User $agent, Report $report, Property $property)
//    {
//        $this->visit = $visit;
//        $this->agent = $agent;
//        $this->report = $report;
//        $this->property = $property;
//    }
//
//    public function getVisit(): Visit
//    {
//        return $this->visit;
//    }
//
//    public function getAgent(): User
//    {
//        return $this->agent;
//    }
//
//    public function getReport(): Report
//    {
//        return $this->report;
//    }
//
//    public function getProperty(): Property
//    {
//        return $this->property;
//    }
//
    public static function getName(): string
    {
        return 'example_teste.created';
    }
}
