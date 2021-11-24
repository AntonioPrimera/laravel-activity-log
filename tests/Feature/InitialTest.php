<?php
namespace AntonioPrimera\ActivityLog\Tests\Feature;

use AntonioPrimera\ActivityLog\Tests\TestCase;

class InitialTest extends TestCase
{
	/** @test */
	public function test_something()
	{
		$this->assertNotEmpty('File generated via: antonioprimera/lara-packager');
		$this->assertIsString('Used command: php vendor/bin/packager make:test InitialTest ');
	}
}