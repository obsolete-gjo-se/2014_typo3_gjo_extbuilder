<?php
namespace Gjo\Gjo\Controller;


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
 * Mod01Controller
 */
class Mod01Controller extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * mod01Repository
	 *
	 * @var \Gjo\Gjo\Domain\Repository\Mod01Repository
	 * @inject
	 */
	protected $mod01Repository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$mod01s = $this->mod01Repository->findAll();
		$this->view->assign('mod01s', $mod01s);
	}

	/**
	 * action show
	 *
	 * @param \Gjo\Gjo\Domain\Model\Mod01 $mod01
	 * @return void
	 */
	public function showAction(\Gjo\Gjo\Domain\Model\Mod01 $mod01) {
		$this->view->assign('mod01', $mod01);
	}

	/**
	 * action new
	 *
	 * @param \Gjo\Gjo\Domain\Model\Mod01 $newMod01
	 * @ignorevalidation $newMod01
	 * @return void
	 */
	public function newAction(\Gjo\Gjo\Domain\Model\Mod01 $newMod01 = NULL) {
		$this->view->assign('newMod01', $newMod01);
	}

	/**
	 * action create
	 *
	 * @param \Gjo\Gjo\Domain\Model\Mod01 $newMod01
	 * @return void
	 */
	public function createAction(\Gjo\Gjo\Domain\Model\Mod01 $newMod01) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->mod01Repository->add($newMod01);
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \Gjo\Gjo\Domain\Model\Mod01 $mod01
	 * @ignorevalidation $mod01
	 * @return void
	 */
	public function editAction(\Gjo\Gjo\Domain\Model\Mod01 $mod01) {
		$this->view->assign('mod01', $mod01);
	}

	/**
	 * action update
	 *
	 * @param \Gjo\Gjo\Domain\Model\Mod01 $mod01
	 * @return void
	 */
	public function updateAction(\Gjo\Gjo\Domain\Model\Mod01 $mod01) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->mod01Repository->update($mod01);
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \Gjo\Gjo\Domain\Model\Mod01 $mod01
	 * @return void
	 */
	public function deleteAction(\Gjo\Gjo\Domain\Model\Mod01 $mod01) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->mod01Repository->remove($mod01);
		$this->redirect('list');
	}

}