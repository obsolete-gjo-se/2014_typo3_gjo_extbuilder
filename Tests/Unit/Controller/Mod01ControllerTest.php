<?php
namespace Gjo\Gjo\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 
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
 * Test case for class Gjo\Gjo\Controller\Mod01Controller.
 *
 */
class Mod01ControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Gjo\Gjo\Controller\Mod01Controller
	 */
	protected $subject;

	public function setUp() {
		$this->subject = $this->getMock('Gjo\\Gjo\\Controller\\Mod01Controller', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}



	/**
	 * @test
	 */
	public function listActionFetchesAllMod01sFromRepositoryAndAssignsThemToView() {

		$allMod01s = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$mod01Repository = $this->getMock('Gjo\\Gjo\\Domain\\Repository\\Mod01Repository', array('findAll'), array(), '', FALSE);
		$mod01Repository->expects($this->once())->method('findAll')->will($this->returnValue($allMod01s));
		$this->inject($this->subject, 'mod01Repository', $mod01Repository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('mod01s', $allMod01s);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenMod01ToView() {
		$mod01 = new \Gjo\Gjo\Domain\Model\Mod01();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('mod01', $mod01);

		$this->subject->showAction($mod01);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenMod01ToView() {
		$mod01 = new \Gjo\Gjo\Domain\Model\Mod01();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newMod01', $mod01);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($mod01);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenMod01ToMod01Repository() {
		$mod01 = new \Gjo\Gjo\Domain\Model\Mod01();

		$mod01Repository = $this->getMock('Gjo\\Gjo\\Domain\\Repository\\Mod01Repository', array('add'), array(), '', FALSE);
		$mod01Repository->expects($this->once())->method('add')->with($mod01);
		$this->inject($this->subject, 'mod01Repository', $mod01Repository);

		$this->subject->createAction($mod01);
	}

	/**
	 * @test
	 */
	public function createActionAddsMessageToFlashMessageContainer() {
		$mod01 = new \Gjo\Gjo\Domain\Model\Mod01();

		$mod01Repository = $this->getMock('Gjo\\Gjo\\Domain\\Repository\\Mod01Repository', array('add'), array(), '', FALSE);
		$this->inject($this->subject, 'mod01Repository', $mod01Repository);
		$this->subject->expects($this->once())->method('addFlashMessage');

		$this->subject->createAction($mod01);
	}

	/**
	 * @test
	 */
	public function createActionRedirectsToListAction() {
		$mod01 = new \Gjo\Gjo\Domain\Model\Mod01();

		$mod01Repository = $this->getMock('Gjo\\Gjo\\Domain\\Repository\\Mod01Repository', array('add'), array(), '', FALSE);
		$this->inject($this->subject, 'mod01Repository', $mod01Repository);

		$this->subject->expects($this->once())->method('redirect')->with('list');
		$this->subject->createAction($mod01);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenMod01ToView() {
		$mod01 = new \Gjo\Gjo\Domain\Model\Mod01();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('mod01', $mod01);

		$this->subject->editAction($mod01);
	}


	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenMod01InMod01Repository() {
		$mod01 = new \Gjo\Gjo\Domain\Model\Mod01();

		$mod01Repository = $this->getMock('Gjo\\Gjo\\Domain\\Repository\\Mod01Repository', array('update'), array(), '', FALSE);
		$mod01Repository->expects($this->once())->method('update')->with($mod01);
		$this->inject($this->subject, 'mod01Repository', $mod01Repository);

		$this->subject->updateAction($mod01);
	}

	/**
	 * @test
	 */
	public function updateActionAddsMessageToFlashMessageContainer() {
		$mod01 = new \Gjo\Gjo\Domain\Model\Mod01();

		$mod01Repository = $this->getMock('Gjo\\Gjo\\Domain\\Repository\\Mod01Repository', array('update'), array(), '', FALSE);
		$this->inject($this->subject, 'mod01Repository', $mod01Repository);

		$this->subject->expects($this->once())->method('addFlashMessage');
		$this->subject->updateAction($mod01);
	}

	/**
	 * @test
	 */
	public function updateActionRedirectsToListAction() {
		$mod01 = new \Gjo\Gjo\Domain\Model\Mod01();

		$mod01Repository = $this->getMock('Gjo\\Gjo\\Domain\\Repository\\Mod01Repository', array('update'), array(), '', FALSE);
		$this->inject($this->subject, 'mod01Repository', $mod01Repository);

		$this->subject->expects($this->once())->method('redirect')->with('list');
		$this->subject->updateAction($mod01);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenMod01FromMod01Repository() {
		$mod01 = new \Gjo\Gjo\Domain\Model\Mod01();

		$mod01Repository = $this->getMock('Gjo\\Gjo\\Domain\\Repository\\Mod01Repository', array('remove'), array(), '', FALSE);
		$mod01Repository->expects($this->once())->method('remove')->with($mod01);
		$this->inject($this->subject, 'mod01Repository', $mod01Repository);

		$this->subject->deleteAction($mod01);
	}

	/**
	 * @test
	 */
	public function deleteActionAddsMessageToFlashMessageContainer() {
		$mod01 = new \Gjo\Gjo\Domain\Model\Mod01();

		$mod01Repository = $this->getMock('Gjo\\Gjo\\Domain\\Repository\\Mod01Repository', array('remove'), array(), '', FALSE);
		$this->inject($this->subject, 'mod01Repository', $mod01Repository);
		$this->subject->expects($this->once())->method('addFlashMessage');

		$this->subject->deleteAction($mod01);
	}

	/**
	 * @test
	 */
	public function deleteActionRedirectsToListAction() {
		$mod01 = new \Gjo\Gjo\Domain\Model\Mod01();

		$mod01Repository = $this->getMock('Gjo\\Gjo\\Domain\\Repository\\Mod01Repository', array('remove'), array(), '', FALSE);
		$this->inject($this->subject, 'mod01Repository', $mod01Repository);

		$this->subject->expects($this->once())->method('redirect')->with('list');
		$this->subject->deleteAction($mod01);
	}
}
