<?php

namespace App\Tests\Unit\Domain\Service;

use App\Domain\Collection\ConditionCollection;
use App\Domain\Contract\AirplaneInterface;
use App\Domain\Enum\TimeOfDayEnum;
use App\Domain\Enum\WeatherEnum;
use App\Domain\Model\CurtissNC4;
use App\Domain\Service\FlyService;
use PHPUnit\Framework\TestCase;

class FlyServiceTest extends TestCase
{
    /**
     * @dataProvider flyDataProvider
     *
     * @param AirplaneInterface $airplane
     * @param array             $conditionSets
     * @param bool              $expectedResult
     */
    public function testFly(AirplaneInterface $airplane, array $conditionSets, bool $expectedResult): void
    {
        foreach ($conditionSets as $conditionSet) {
            $service = new FlyService($conditionSet);

            $this->assertEquals($service->fly($airplane), $expectedResult);
        }
    }

    public function flyDataProvider(): iterable
    {
        yield 'success' => [
            'airplane' => new CurtissNC4(),
            'condition sets' => [
                'good weather/day time' => new ConditionCollection([
                    new WeatherEnum(WeatherEnum::GOOD),
                    new TimeOfDayEnum(TimeOfDayEnum::DAY),
                ]),
            ],
            'expectedResult' => true,
        ];

        yield 'fail' => [
            'airplane' => new CurtissNC4(),
            'condition sets' => [
                'bad weather/day time' => new ConditionCollection([
                    new WeatherEnum(WeatherEnum::BAD),
                    new TimeOfDayEnum(TimeOfDayEnum::DAY),
                ]),
                'bad weather/night time' => new ConditionCollection([
                    new WeatherEnum(WeatherEnum::BAD),
                    new TimeOfDayEnum(TimeOfDayEnum::NIGHT),
                ]),
                'good weather/night time' => new ConditionCollection([
                    new WeatherEnum(WeatherEnum::GOOD),
                    new TimeOfDayEnum(TimeOfDayEnum::NIGHT),
                ]),
            ],
            'expectedResult' => false,
        ];
    }
}