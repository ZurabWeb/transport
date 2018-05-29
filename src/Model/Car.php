<?php

namespace ZurabWeb\Transport\Model;

use \ZurabWeb\Transport\Base\Model as BaseModel,
	\ZurabWeb\Transport\Base\VehicleInterface;

Class Car extends BaseModel implements VehicleInterface {

	/**
	 * Current speed in MPH
	 *
	 * @var int
	 */
	private $speed = 0;

	/**
	 * Max allowed speed in MPH
	 *
	 * @var int
	 */
	private $maxSpeed = 120;

	/**
	 * Check if the car is currently driving
	 *
	 * @return boolean
	 */
	public function isDriving() {
		return $this->speed > 0;
	}

	/**
	 * Drive the car
	 *
	 * @param int $speed
	 * @return void
	 * @throws \InvalidArgumentException
	 */
	public function drive(int $speed) {
		if ($speed > $this->maxSpeed) {
			throw new \InvalidArgumentException('Can\'t drive that fast');
		}
		$this->speed = $speed;
	}

	/**
	 * Stop the car
	 *
	 * @return void
	 */
	public function stop() {
		$this->speed = 0;
	}
}
