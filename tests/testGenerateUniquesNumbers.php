<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:52 PM
 */

namespace Elminson\GenerateUniquesNumbers;

require __DIR__ . '/../vendor/autoload.php';

use Elminson\GenerateUniquesNumbers;
use PHPUnit\Framework\TestCase;

class testGenerateUniquesNumbers extends TestCase
{

	/**
	 *
	 */
	function testFirstTestCase()
	{

		$generateuniquesnumbers = new GenerateUniquesNumbers();

		$generateuniquesnumbers->generate();
		$numbers = $generateuniquesnumbers->getCurrentNumbers();

		$this->assertIsInt( $numbers[0]);
	}

}
