<?php

declare(strict_types=1);

namespace Phpgeo;

use Phpgeo\Distance\Vincenty;
use PHPUnit\Framework\TestCase;

class Issue42Test extends TestCase
{
    public function testIfIssue42IsFixed(): void
    {
        $vincenty = new Vincenty();

        $distance = $vincenty->getDistance(
            new Point(45.306833, 5.887717),
            new Point(45.306833, 5.887733)
        );

        $this->assertEquals(1.255, $distance);
    }
}
