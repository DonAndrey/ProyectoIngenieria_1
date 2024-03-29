<?php
App::uses('Country', 'Model');

class CountryTest extends CakeTestCase {

	public $fixtures = array(
		'app.country',
	);

	public $autoFixtures = false;

	public function testCountryModel() {
		$result = $this->loadFixtures('Country');
		debug($result);
	}

	public function setUp() {
		parent::setUp();
		$this->Country = ClassRegistry::init('Country');
	}

	public function tearDown() {
		unset($this->Country);

		parent::tearDown();
	}

}
