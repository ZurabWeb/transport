<?php

namespace ZurabWeb\Transport\Base;

interface VehicleInterface {

	/**
	 * Check if the vehicle is currently driving
	 *
	 * @return boolean
	 */
	public function isDriving();

	/**
	 * Drive the vehicle
	 *
	 * @param int $speed
	 * @return void
	 */
	public function drive(int $speed);

	/**
	 * Stop the vehicle
	 *
	 * @return void
	 */
	public function stop();

}
