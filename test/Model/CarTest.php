<?php

namespace ZurabWeb\Transport\Test\Model;

use \ZurabWeb\Transport\Model\Car,
	\ZurabWeb\Transport\Test\TestCase;

/**
 * @group vehicle
 */
class CarTest extends TestCase {

	public function testIsDriving() {
		$bicycle = new Car();
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
		$bicycle = new Car();
		$bicycle->drive(125);
	}

}
