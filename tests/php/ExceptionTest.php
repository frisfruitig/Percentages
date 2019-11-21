<?php
// phpcs:ignoreFile
// Require class file.
require_once '../source/php/class-percentages.php';
use FrisFruitig\Percentages as Percentages;

// Automated tests.
class ExceptionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test if class throws an exception if non-numeric array values are found.
	 */
	public function testException() {
		try {
			$array       = array( 'ABC' );
			$percentages = new Percentages( $array );
		} catch ( \RuntimeException $expected ) {
			return;
		}
		$this->fail( 'An expected exception has not been raised.' );
	}

}
