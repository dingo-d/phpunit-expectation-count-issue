<?php

require './src/A.php';

use PHPUnit\Framework\TestCase;

final class ATest extends TestCase {
    public function testCountIsCalled() {
        $cMock = $this->getMockBuilder(C::class)
            ->onlyMethods(['count'])
            ->getMock();

        $cMock->method('count')
            ->willReturn(true);

        $dMock = $this->getMockBuilder(D::class)
            ->onlyMethods(['count'])
            ->getMock();

        $dMock->method('count')
            ->willReturn(true);

        $bMock = $this->getMockBuilder(B::class)
            ->onlyMethods(['getClasses'])
            ->getMock();

        $bMock->method('getClasses')
            ->willReturn([
                $cMock::class,
                $dMock::class,
            ]);

        $cMock->expects($this->once())->method('count');
        $dMock->expects($this->once())->method('count');

        (new A($bMock))->run();
    }
}