<?php

namespace App\Tests\Unit\Domain\Service;

use App\Domain\Collection\ConditionCollection;
use App\Domain\Contract\AirplaneInterface;
use App\Domain\Enum\LandTypeEnum;
use App\Domain\Model\CurtissNC4;
use App\Domain\Service\TakeoffService;
use PHPUnit\Framework\TestCase;

class TakeoffServiceTest extends TestCase
{
    /**
     * @dataProvider takeoffDataProvider
     *
     * @param AirplaneInterface $airplane
     * @param array             $conditionSets
     * @param bool              $expectedResult
     */
    public function testTakeoff(AirplaneInterface $airplane, array $conditionSets, bool $expectedResult): void
    {
        foreach ($conditionSets as $conditionSet) {
            $service = new TakeoffService($conditionSet);

            $this->assertEquals($service->takeoff($airplane), $expectedResult);
        }
    }

    public function takeoffDataProvider(): iterable
    {
        yield 'success' => [
            'airplane' => new CurtissNC4(),
            'condition sets' => [
                'water' => new ConditionCollection([
                    new LandTypeEnum(LandTypeEnum::WATER),
                ]),
            ],
            'expectedResult' => true,
        ];

        yield 'fail' => [
            'airplane' => new CurtissNC4(),
            'condition sets' => [
                'runway' => new ConditionCollection([
                    new LandTypeEnum(LandTypeEnum::RUNWAY),
                ]),
            ],
            'expectedResult' => false,
        ];
    }
}