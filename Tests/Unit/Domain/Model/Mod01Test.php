<?php

namespace Gjo\Gjo\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \Gjo\Gjo\Domain\Model\Mod01.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Mod01Test extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Gjo\Gjo\Domain\Model\Mod01
	 */
	protected $subject;

	public function setUp() {
		$this->subject = new \Gjo\Gjo\Domain\Model\Mod01();
	}

	public function tearDown() {
		unset($this->subject);
	}



	/**
	 * @test
	 */
	public function getStringReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getString()
		);
	}

	/**
	 * @test
	 */
	public function setStringForStringSetsString() {
		$this->subject->setString('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'string',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTextReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getText()
		);
	}

	/**
	 * @test
	 */
	public function setTextForStringSetsText() {
		$this->subject->setText('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'text',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRichtextReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getRichtext()
		);
	}

	/**
	 * @test
	 */
	public function setRichtextForStringSetsRichtext() {
		$this->subject->setRichtext('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'richtext',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getIntegerPropReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getIntegerProp()
		);
	}

	/**
	 * @test
	 */
	public function setIntegerPropForIntegerSetsIntegerProp() {
		$this->subject->setIntegerProp(12);

		$this->assertAttributeEquals(
			12,
			'integerProp',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGleikommaReturnsInitialValueForFloat() {
		$this->assertSame(
			0.0,
			$this->subject->getGleikomma()
		);
	}

	/**
	 * @test
	 */
	public function setGleikommaForFloatSetsGleikomma() {
		$this->subject->setGleikomma(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'gleikomma',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getBoolReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getBool()
		);
	}

	/**
	 * @test
	 */
	public function setBoolForBooleanSetsBool() {
		$this->subject->setBool(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'bool',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDatumReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDatum()
		);
	}

	/**
	 * @test
	 */
	public function setDatumForDateTimeSetsDatum() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDatum($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'datum',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDatumundzeitReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDatumundzeit()
		);
	}

	/**
	 * @test
	 */
	public function setDatumundzeitForDateTimeSetsDatumundzeit() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDatumundzeit($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'datumundzeit',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNativesDatumReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getNativesDatum()
		);
	}

	/**
	 * @test
	 */
	public function setNativesDatumForDateTimeSetsNativesDatum() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setNativesDatum($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'nativesDatum',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNativesDatumUndZeitReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getNativesDatumUndZeit()
		);
	}

	/**
	 * @test
	 */
	public function setNativesDatumUndZeitForDateTimeSetsNativesDatumUndZeit() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setNativesDatumUndZeit($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'nativesDatumUndZeit',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZeitReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getZeit()
		);
	}

	/**
	 * @test
	 */
	public function setZeitForIntegerSetsZeit() {
		$this->subject->setZeit(12);

		$this->assertAttributeEquals(
			12,
			'zeit',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZeitSekundenReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getZeitSekunden()
		);
	}

	/**
	 * @test
	 */
	public function setZeitSekundenForStringSetsZeitSekunden() {
		$this->subject->setZeitSekunden('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'zeitSekunden',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAuswahllsiteReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getAuswahllsite()
		);
	}

	/**
	 * @test
	 */
	public function setAuswahllsiteForIntegerSetsAuswahllsite() {
		$this->subject->setAuswahllsite(12);

		$this->assertAttributeEquals(
			12,
			'auswahllsite',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateiReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDatei()
		);
	}

	/**
	 * @test
	 */
	public function setDateiForStringSetsDatei() {
		$this->subject->setDatei('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'datei',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBildReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBild()
		);
	}

	/**
	 * @test
	 */
	public function setBildForStringSetsBild() {
		$this->subject->setBild('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'bild',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateireferenzReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDateireferenz()
		);
	}

	/**
	 * @test
	 */
	public function setDateireferenzForStringSetsDateireferenz() {
		$this->subject->setDateireferenz('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'dateireferenz',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOrdnerReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOrdner()
		);
	}

	/**
	 * @test
	 */
	public function setOrdnerForStringSetsOrdner() {
		$this->subject->setOrdner('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ordner',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPasswortReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPasswort()
		);
	}

	/**
	 * @test
	 */
	public function setPasswortForStringSetsPasswort() {
		$this->subject->setPasswort('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'passwort',
			$this->subject
		);
	}
}
