<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Gjo.' . $_EXTKEY,
	'Pluginkey',
	array(
		'Mod01' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Mod01' => 'create, update, delete',
		
	)
);

?>