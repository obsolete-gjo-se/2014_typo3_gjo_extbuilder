<?php
namespace Gjo\Gjo\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * ddsfds
 */
class Mod01 extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * string
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $string = '';

	/**
	 * text
	 *
	 * @var string
	 */
	protected $text = '';

	/**
	 * richtext
	 *
	 * @var string
	 */
	protected $richtext = '\'\'';

	/**
	 * integerProp
	 *
	 * @var integer
	 */
	protected $integerProp = 0;

	/**
	 * gleikomma
	 *
	 * @var float
	 */
	protected $gleikomma = 0.0;

	/**
	 * bool
	 *
	 * @var boolean
	 */
	protected $bool = 'FALSE';

	/**
	 * datum
	 *
	 * @var \DateTime
	 */
	protected $datum;

	/**
	 * datumundzeit
	 *
	 * @var \DateTime
	 */
	protected $datumundzeit;

	/**
	 * nativesDatum
	 *
	 * @var \DateTime
	 */
	protected $nativesDatum = 'NULL';

	/**
	 * nativesDatumUndZeit
	 *
	 * @var \DateTime
	 */
	protected $nativesDatumUndZeit = 'NULL';

	/**
	 * zeit
	 *
	 * @var integer
	 */
	protected $zeit = '0';

	/**
	 * zeitSekunden
	 *
	 * @var string
	 */
	protected $zeitSekunden = '';

	/**
	 * auswahllsite
	 *
	 * @var integer
	 */
	protected $auswahllsite = '0';

	/**
	 * datei
	 *
	 * @var string
	 */
	protected $datei = '\'\'';

	/**
	 * bild
	 *
	 * @var string
	 */
	protected $bild = '\'\'';

	/**
	 * dateireferenz
	 *
	 * @var string
	 */
	protected $dateireferenz = '\'\'';

	/**
	 * ordner
	 *
	 * @var string
	 */
	protected $ordner = '\'\'';

	/**
	 * passwort
	 *
	 * @var string
	 */
	protected $passwort = '\'\'';

	/**
	 * Returns the string
	 *
	 * @return string $string
	 */
	public function getString() {
		return $this->string;
	}

	/**
	 * Sets the string
	 *
	 * @param string $string
	 * @return void
	 */
	public function setString($string) {
		$this->string = $string;
	}

	/**
	 * Returns the text
	 *
	 * @return string $text
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Sets the text
	 *
	 * @param string $text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}

	/**
	 * Returns the richtext
	 *
	 * @return string $richtext
	 */
	public function getRichtext() {
		return $this->richtext;
	}

	/**
	 * Sets the richtext
	 *
	 * @param string $richtext
	 * @return void
	 */
	public function setRichtext($richtext) {
		$this->richtext = $richtext;
	}

	/**
	 * Returns the integerProp
	 *
	 * @return integer $integerProp
	 */
	public function getIntegerProp() {
		return $this->integerProp;
	}

	/**
	 * Sets the integerProp
	 *
	 * @param string $integerProp
	 * @return void
	 */
	public function setIntegerProp($integerProp) {
		$this->integerProp = $integerProp;
	}

	/**
	 * Returns the gleikomma
	 *
	 * @return float $gleikomma
	 */
	public function getGleikomma() {
		return $this->gleikomma;
	}

	/**
	 * Sets the gleikomma
	 *
	 * @param float $gleikomma
	 * @return void
	 */
	public function setGleikomma($gleikomma) {
		$this->gleikomma = $gleikomma;
	}

	/**
	 * Returns the bool
	 *
	 * @return boolean $bool
	 */
	public function getBool() {
		return $this->bool;
	}

	/**
	 * Sets the bool
	 *
	 * @param boolean $bool
	 * @return void
	 */
	public function setBool($bool) {
		$this->bool = $bool;
	}

	/**
	 * Returns the boolean state of bool
	 *
	 * @return boolean
	 */
	public function isBool() {
		return $this->bool;
	}

	/**
	 * Returns the datum
	 *
	 * @return \DateTime $datum
	 */
	public function getDatum() {
		return $this->datum;
	}

	/**
	 * Sets the datum
	 *
	 * @param \DateTime $datum
	 * @return void
	 */
	public function setDatum(\DateTime $datum) {
		$this->datum = $datum;
	}

	/**
	 * Returns the datumundzeit
	 *
	 * @return \DateTime $datumundzeit
	 */
	public function getDatumundzeit() {
		return $this->datumundzeit;
	}

	/**
	 * Sets the datumundzeit
	 *
	 * @param \DateTime $datumundzeit
	 * @return void
	 */
	public function setDatumundzeit(\DateTime $datumundzeit) {
		$this->datumundzeit = $datumundzeit;
	}

	/**
	 * Returns the nativesDatum
	 *
	 * @return \DateTime $nativesDatum
	 */
	public function getNativesDatum() {
		return $this->nativesDatum;
	}

	/**
	 * Sets the nativesDatum
	 *
	 * @param \DateTime $nativesDatum
	 * @return void
	 */
	public function setNativesDatum(\DateTime $nativesDatum) {
		$this->nativesDatum = $nativesDatum;
	}

	/**
	 * Returns the nativesDatumUndZeit
	 *
	 * @return \DateTime $nativesDatumUndZeit
	 */
	public function getNativesDatumUndZeit() {
		return $this->nativesDatumUndZeit;
	}

	/**
	 * Sets the nativesDatumUndZeit
	 *
	 * @param \DateTime $nativesDatumUndZeit
	 * @return void
	 */
	public function setNativesDatumUndZeit(\DateTime $nativesDatumUndZeit) {
		$this->nativesDatumUndZeit = $nativesDatumUndZeit;
	}

	/**
	 * Returns the zeit
	 *
	 * @return integer $zeit
	 */
	public function getZeit() {
		return $this->zeit;
	}

	/**
	 * Sets the zeit
	 *
	 * @param integer $zeit
	 * @return void
	 */
	public function setZeit(integer $zeit) {
		$this->zeit = $zeit;
	}

	/**
	 * Returns the zeitSekunden
	 *
	 * @return string $zeitSekunden
	 */
	public function getZeitSekunden() {
		return $this->zeitSekunden;
	}

	/**
	 * Sets the zeitSekunden
	 *
	 * @param string $zeitSekunden
	 * @return void
	 */
	public function setZeitSekunden($zeitSekunden) {
		$this->zeitSekunden = $zeitSekunden;
	}

	/**
	 * Returns the auswahllsite
	 *
	 * @return integer $auswahllsite
	 */
	public function getAuswahllsite() {
		return $this->auswahllsite;
	}

	/**
	 * Sets the auswahllsite
	 *
	 * @param integer $auswahllsite
	 * @return void
	 */
	public function setAuswahllsite($auswahllsite) {
		$this->auswahllsite = $auswahllsite;
	}

	/**
	 * Returns the datei
	 *
	 * @return string $datei
	 */
	public function getDatei() {
		return $this->datei;
	}

	/**
	 * Sets the datei
	 *
	 * @param string $datei
	 * @return void
	 */
	public function setDatei($datei) {
		$this->datei = $datei;
	}

	/**
	 * Returns the bild
	 *
	 * @return string $bild
	 */
	public function getBild() {
		return $this->bild;
	}

	/**
	 * Sets the bild
	 *
	 * @param string $bild
	 * @return void
	 */
	public function setBild($bild) {
		$this->bild = $bild;
	}

	/**
	 * Returns the dateireferenz
	 *
	 * @return string $dateireferenz
	 */
	public function getDateireferenz() {
		return $this->dateireferenz;
	}

	/**
	 * Sets the dateireferenz
	 *
	 * @param string $dateireferenz
	 * @return void
	 */
	public function setDateireferenz($dateireferenz) {
		$this->dateireferenz = $dateireferenz;
	}

	/**
	 * Returns the ordner
	 *
	 * @return string $ordner
	 */
	public function getOrdner() {
		return $this->ordner;
	}

	/**
	 * Sets the ordner
	 *
	 * @param string $ordner
	 * @return void
	 */
	public function setOrdner($ordner) {
		$this->ordner = $ordner;
	}

	/**
	 * Returns the passwort
	 *
	 * @return string $passwort
	 */
	public function getPasswort() {
		return $this->passwort;
	}

	/**
	 * Sets the passwort
	 *
	 * @param string $passwort
	 * @return void
	 */
	public function setPasswort($passwort) {
		$this->passwort = $passwort;
	}

}