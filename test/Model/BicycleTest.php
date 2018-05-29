<?php

namespace ZurabWeb\Transport\Test\Model;

use \ZurabWeb\Transport\Model\Bicycle,
	\ZurabWeb\Transport\Test\TestCase;

/**
 * @group vehicle
 */
class BicycleTest extends TestCase {

	public function testIsDriving() {
		$bicycle = new Bicycle();
		$this->assertFalse($bicycle->isDriving());

		$bicycle->drive(5);
		$this->assertTrue($bicycle->isDriving());

		$bicycle->stop();
		$this->assertFalse($bicycle->isDriving());
	}

	/**
	 * @expectedException \InvalidArgumentException
	 */
	public function testDriveException() {
		$bicycle = new Bicycle();
		$bicycle->drive(25);
	}

}
